<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\model\Project as ProjectModel;
use app\admin\model\Goods;

class Project extends Base
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        //
        $name=request()->param('name');
        if($name){
           $list=ProjectModel::where('title','like','%'.$name.'%')->order('id','desc')->paginate(15);
        }
        else{
            $list=ProjectModel::order('id','desc')->paginate(15);
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
        //
        $loupan=Goods::select();
        return view('create',['loupan'=>$loupan]);
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
        ProjectModel::create($data);
        $this->redirect('index');
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
        $data=ProjectModel::where('id',$id)->find();
        $loupan=Goods::select();
        return view('edit',['data'=>$data,'loupan'=>$loupan]);
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
        ProjectModel::update($data,['id'=>$id]);
        $this->redirect('index');
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
        ProjectModel::destroy($id);
        $this->redirect('admin/project/index');
    }

    
}
