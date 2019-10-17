<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\model\Recording as RecordingModel;
use app\admin\model\Goods;

class Recording extends Base
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index($id)
    {
        //
        $data=RecordingModel::where('bid',$id)->order('id','desc')->paginate(15);
        return view('index',['data'=>$data,'bid'=>$id]);
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create($bid)
    {
        //
        $name=Goods::where('id',$bid)->column('building_name');
        $create_time=time();
        $update_time=$create_time;
        return view('create',['name'=>$name,'create_time'=>$create_time,'update_time'=>$update_time,'bid'=>$bid]);
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
        $bid=$data['bid'];
        $data['create_time']=strtotime($data['create_time']);
        $data['update_time']=time();
        $data['zongjia']=$data['danjia']*$data['zongji'];
        RecordingModel::create($data);
        $this->redirect("http://www.jy1980.com/admin/recording/index/id/$bid.html");
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
        $data=RecordingModel::where('id',$id)->find();
        $bid=$data['bid'];
        $name=Goods::where('id',$bid)->column('building_name');
        return view('edit',['data'=>$data,'name'=>$name]);
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
        $data['create_time']=strtotime($data['create_time']);
        $data['update_time']=time();
        $data['zongjia']=$data['danjia']*$data['zongji'];
        $bid=RecordingModel::where('id',$id)->column('bid')[0];
        // return var_dump($data);
        RecordingModel::update($data,['id'=>$id]);
        $this->redirect("http://www.jy1980.com/admin/recording/index/id/$bid.html");
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
	$bid=RecordingModel::where('id',$id)->column('bid')[0];
	RecordingModel::destroy($id);
	$this->redirect("http://www.jy1980.com/admin/recording/index/id/$bid.html");
    }
}
