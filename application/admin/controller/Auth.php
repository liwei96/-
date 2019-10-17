<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\model\Auth as AuthModel;

class Auth extends Base
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        //
        $data=AuthModel::select();
        $data=get_tree($data);
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
        $top_nav=AuthModel::where('pid',0)->select();
        $second_nav=AuthModel::where('pid','>',0)->select();
        return view('create',['top_auth'=>$top_nav,'second_auth'=>$second_nav]);
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
        AuthModel::create($data,true);
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
        $data=AuthModel::where('id',$id)->find();
        $top_nav=AuthModel::where('pid',0)->select();
        $second_nav=AuthModel::where('pid','>',0)->select();
        return view('edit',['top_auth'=>$top_nav,'second_auth'=>$second_nav,'data'=>$data]);
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
        $data=$request->param();
        AuthModel::where('id',$id)->update($data);
        $this->success('修改成功','admin/auth/index');
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
        AuthModel::destroy($id,true);
        $this->success('删除成功','index');
    }
}
