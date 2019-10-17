<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\model\Success as SuccessModel;

class Success extends Base
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
            $data=SuccessModel::order('id','desc')->paginate(15);
            return view('index',['data'=>$data]);
        }else{
            $data=request()->param()['title'];
            $ss=SuccessModel::where('title','like','%'.$data.'%')->paginate(15);
            return view('index',['data'=>$ss]);
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
        $data['img']=$this->upload_logo();
        SuccessModel::create($data);
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
        $data=SuccessModel::where('id',$id)->find();
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
        if($request->file['news_logo']){
            $data['img']=$this->upload_logo();
        }
        SuccessModel::update($data,['id'=>$id]);
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
        
        $img=SuccessModel::where('id',$id)->column('img')[0];
        unlink(ROOT_PATH.'public'.$img);
        SuccessModel::destroy($id);
        $this->redirect('index');
    }
    
    private function upload_logo(){
        $file=request()->file('news_logo');
        if(empty($file)){
            $this->error('没有文件上传');
        }
        $info=$file->validate(['size'=>1*1024*1024,'ext'=>'jpg,png,jpeg,gif'])->move(ROOT_PATH.'public'.DS.'uploads');
        if($info){
            $goods_logo=DS.'uploads'.DS.$info->getSaveName();
            $img=\think\Image::open('.'.$goods_logo);
            $img->thumb(800,800)->save('.'.$goods_logo);
            return $goods_logo;
        }else{
            $error=$file->getError();
            $this->error($error);
        }
    }
}
