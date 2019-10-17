<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\Validate;
use app\admin\model\Manager as ManagerModel;
use app\admin\model\Role;

class Manager extends Base
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        //
        if(request()->isGet()){
            $list=ManagerModel::order('id asc')->paginate(3);
        }
        if(request()->isPost()){
            $manager=new ManagerModel();
            $user=request()->param();
                $list=$manager->where('username','like','%'.$user['username'].'%')
            ->order('id asc')->paginate(3);
        }
        return view('index',['list'=>$list]);
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        $roles=Role::select();
        return view('create',['roles'=>$roles]);
        
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
        $rule=[
            'username'=>'require',
            'nickname'=>'require',
            'password'=>'require|length:6,12',
            'email'=>'require',
        ];
        $msg=[
            'username.require'=>'用户名不能为空',
            'nickname.require'=>'昵称不能为空',
            'password.require'=>'密码不能为空',
            'password.length'=>'密码长度为6-12',
            'email.require'=>'邮箱不能为空'
        ];
        $data=$request->param();
        $validate=new Validate($rule,$msg);
        if(!$validate->check($data)){
            $error=$validate->getError();
            $this->error($error);
        }
        // var_dump($data);
        $data['password']=encrypt_password($data['password']);
        $manager=new ManagerModel();
        $manager::create($data,true);
        $this->success('添加成功','index');
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function modifypassword($id)
    {
        //
        if($id==1){
            $this->error('超级管理员不能修改','index');
        }
        $data=ManagerModel::where('id',$id)->column('username','id');
        $data['id']=$id;
        // return var_dump($data[1]);
        return view('modifypassword',['data'=>$data]);
    }

    public function savepassword($id){
        $data=request()->param();
        $pwd=ManagerModel::where('id',$id)->column('password');
        if($pwd[0]==encrypt_password($data['oldpassword'])){
            if($data['newpassword']==$data['renewpassword']){
                if($data['newpassword'] && $data['renewpassword']){
                    $password=encrypt_password($data['newpassword']);
                    ManagerModel::where('id',$id)->update(['password'=>$password]);
                    $this->success('重置成功','admin/login/logout');
                }
                $this->error('不能为空');
            }
            $this->error('两次输入的密码不一致');
        }
        $this->error('初始密码不正确');
    }
    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
        if($id==1){
            $this->error('超级管理员不能修改','index');
        }
        $roles=Role::select();
        $data=ManagerModel::where('id',$id)->find();
        // return var_dump($data);
        return view('edit',['data'=>$data,'roles'=>$roles]);
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
        $manager=new ManagerModel();
        $data=$request->param();
        $manager->where('id',$id)->update($request->param());
        $this->success('更新成功','index');
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
        ManagerModel::destroy($id);
        $this->redirect('index');
    }
}
