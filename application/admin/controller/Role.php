<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\model\Role as RoleModel;
use app\admin\model\Auth;

class Role extends Base
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        //
        $data=RoleModel::paginate(5);
        return view('index',['list'=>$data]);
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
        return view();
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
        $data=$request->param();
        RoleModel::create($data,true);
        $this->success('添加成功','index');
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
        $data=RoleModel::where('id',$id)->find();
        return view('edit',['list'=>$data]);
    }

    public function setauth($id){
        $data=RoleModel::where('id',$id)->find();
        $top=Auth::where('pid',0)->select();
        $second=Auth::where('pid','>',0)->select();
        return view('setauth',['role'=>$data,'top_auth'=>$top,'second_auth'=>$second]);
    }
    public function saveauth(){
        $data=request()->param();
        $ids=implode(',',$data['id']);
        RoleModel::where('id',$data['role_id'])->update(['role_auth_ids'=>$ids]);
        $this->success('分派成功','index');
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
        $data=request()->param();
        RoleModel::where('id',$data['id'])->update(['role_name'=>$data['role_name']]);
        $this->success('更改成功','index');
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
        RoleModel::destroy($id,true);
        $this->success('删除成功','index');
    }
}
