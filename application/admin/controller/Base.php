<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\model\Auth;
use app\admin\model\Role;

class Base extends Controller
{
    public function __construct(Request $request){
        parent::__construct($request);
        //登录检查
        if(!session('?userinfo')){
            $this->redirect('admin/login/login');
        }
        $this->checkauth();
        $this->getnav();
    }
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function checkauth()
    {
        //
        $role_id=session('userinfo.role_id');
        if(1==$role_id){
            return;
        }
        $controller=request()->controller();
        $action=request()->action();
        if($controller=='index' && $action=='index'){
            return;
        }

        $role=Role::fing($role_id);
        $role_auth_ids=$role['role_auth_ids'];
        $auth=Auth::where([
            'auth_c'=>$controller,
            'auth_a'=>$action
        ])->find();
        $auth_id=$auth['id'];
        if(!in_array($auth_id,explode(',',$role_auth_ids))){
            $this->error('别做傻事','admin/index/index');
        }
        return;
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function getnav()
    {
        //
        $role_id=session('userinfo.role_id');
        if(1==$role_id){
            $top_nav=Auth::where([
                'pid'=>0,
                'is_nav'=>1
            ])->select();
            $second_nav=Auth::where([
                'pid'=>['>',0],
                'is_nav'=>1
            ])->select();
        }else{
            $role=Role::find($role_id);
            $role_auth_ids=$role['role_auth_ids'];
            $top_nav=Auth::where([
                'pid'=>0,
                'is_nav'=>1,
                'id'=>['in',$role_auth_ids]
            ])->select();
            $second_nav=Auth::where([
                'pid'=>['>',0],
                'is_nav'=>1,
                'id'=>['in',$role_auth_ids]
            ])->select();
        }
        $this->assign('top_nav',$top_nav);
        $this->assign('second_nav',$second_nav);
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
