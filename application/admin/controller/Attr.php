<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\model\Category;

class Attr extends Base
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        //
        return view();
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
        $c=$data['c'];
        $f=$data['f'];
        $cs=Category::where('area_name',$c)->find();
        if($cs){
            $fs=Category::where('area_name',$f)->find();
            if($fs){
                    $this->error('已经存在，不能重复添加','index');
                    Category::create(['area_name'=>$f,'pid'=>$cs['id']]);
            }else{
                $res=Category::create(['area_name'=>$f,'pid'=>$cs['id']]);
            }
        }else{
            $res=Category::create(['area_name'=>$c,'pid'=>0]);
            Category::create(['area_name'=>$f,'pid'=>$res->id]);
        }
        $this->redirect('admin/index/index');
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
