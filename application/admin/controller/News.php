<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\Db;
use app\admin\model\Text;

class News extends Base
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index($id)
    {
        //
        $data=Text::where('bid',$id)->paginate(15);
        return view('content',['data'=>$data,'bid'=>$id]);
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create($id)
    {
        //
	return view('index',['id'=>$id]);
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
        $bid=$request->param('bid');
        $data['img']=$this->upload_logo();
        Text::create($data);
        $this->redirect("/admin/news/index/id/$bid");
    }


    private function upload_logo(){
        
        $file=request()->file('dong');
        if(empty($file)){
            $this->error('没有文件上传');
        }
        $info=$file->validate(['size'=>5*1024*1024,'ext'=>'jpg,png,jpeg,gif'])->move(ROOT_PATH.'public'.DS.'uploads');
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

    public function delimg(){
        $data=request()->param();
        $id=$data['id'];
        unlink(ROOT_PATH.DS.'public'.$data['src']);
        $ll=[];
        $ll['img']='';
        Text::where('id','eq',$id)->update($ll);
        return json(['code'=>200]);
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
	$data=Text::where('id',$id)->find();
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
    $ss=$request->param();
    
    $bid=$request->param('bid');
    if(request()->file('dong')){
        $ss['img']=$this->upload_logo();
    }
    unset($ss['dong']);
	Text::update($ss,['id'=>$id]);
	$this->redirect("/admin/news/index/id/$bid");
    }

	
    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delet($id,$bid)
    {
        //
        $data=Text::where('id','eq',$id)->find();
        unlink(ROOT_PATH.DS.'public'.$data['img']);
        Text::destroy($id);
        $this->redirect("/admin/news/index/id/$bid");
    }

    
}
