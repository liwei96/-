<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\model\Tupai as TupaiModel;

class Tupai extends Base
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
            $data=TupaiModel::order('id','desc')->paginate(15);
            return view('index',['data'=>$data]);
        }else{
            $d=request()->param()['name'];
            $data=TupaiModel::where('name','like','%'.$d.'%')->paginate(15);
            return view('index',['data'=>$data]);
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
        TupaiModel::create($data);
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
        $data=TupaiModel::where('id',$id)->find();
        return view('edit',['data'=>$data]);
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
        TupaiModel::update($data,['id'=>$id]);
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
        TupaiModel::destroy($id);
        $this->redirect('index');
    }
}
