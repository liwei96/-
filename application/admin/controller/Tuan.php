<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\Validate;
use app\admin\model\Tuan as TuanModel;
use app\admin\model\Goods;

class Tuan extends Base
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index($id)
    {
        //
        $data=TuanModel::where('bid',$id)->find();
        if($data){
            $this->redirect('edit',['id'=>$id]);
        }else{
            
            return view('index',['id'=>$id]);
        }
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
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
        
        // dump($data);
	$rule=[
            'start'=>'require',
            'end'=>'require'
        ];
        $msg=[
            'start.require'=>'开始时间没有设置',
            'end.require'=>'结束时间没有设置'
        ];
        $validate=new Validate($rule,$msg);
        if(!$validate->check($data)){
            $error=$validate->getError();
            $this->error($error);
        }
        TuanModel::create($data);
        $this->redirect('admin/building/index');
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
        $data=TuanModel::where('bid',$id)->find();
        return view('edit',['data'=>$data,'id'=>$id]);
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
        
        $re=TuanModel::where('bid',$id)->update($data);
        $this->redirect('index',['id'=>$id]);
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
        TuanModel::destroy(['bid'=>$id]);
        $this->redirect('admin/building/index');
    }
}
