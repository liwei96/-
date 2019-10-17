<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\Validate;
use app\admin\model\Manager;

class login extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function login()
    {
        if(request()->isGet()){
            $this->view->engine->layout(false);
            return view();
        }
        if(request()->isPost()){
            $data=request()->param();
            $rule=[
                'username'=>'require',
                'password'=>'require|length:6,12'
            ];
            $msg=[
                'username.require'=>'用户名不能为空',
                'password.require'=>'密码不能为空',
                'password.length'=>'密码长度为6到12位'
            ];
            $validate=new Validate($rule,$msg);
            if(!$validate->check($data)){
                $error=$validate->getError();
                $this->error($error);
            }
            // 验证码
            if(!captcha_check($data['code'])){
                $this->error('验证码错误');
            }
            // 
            $password=encrypt_password($data['password']);
            $user=new Manager();
            $user=$user::where('username',$data['username'])->where('password',$password)->find();
            if($user){
                session('userinfo',$user->toArray());
                $this->success('登录成功','admin/index/index');
            }else{
                $this->error('账号或密码错误','admin/login/login');
            }
        }
        
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function logout()
    {
        session(null);
        $this->redirect('admin/login/login');
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
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
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
    }
}
