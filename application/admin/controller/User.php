<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\home\model\Request as RequestModel;
use app\home\model\Yue as YueModel;
use app\home\model\User as UserModel;
use app\home\model\Port1;
use app\home\model\Port2;
use app\home\model\Liu;
use app\home\model\Goods;
use app\home\model\Tel;
use app\home\model\Zhi;
use app\home\model\Hmsg;
use app\admin\model\Yu;

class User extends Base
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
            $data=Tel::order('id','desc')->paginate(15);
        }else{
            $res=request()->param();
            // dump($where);die();
            $where=[];
            if($res['phone']){
                $where['phone']=['eq',$res['phone']];
            }
            if($res['building_name']){
                $id=Goods::where('building_name','like','%'.$res['building_name'.'%'])->column('id');
                $where['bid']=['in',$id];
            }
            $data=Tel::order('id','desc')->where($where)->paginate(15);
        }
        foreach($data as $v){
            $v['building_name']=Goods::where('id','eq',$v['bid'])->column('building_name')[0];
        }
        return view('index',['data'=>$data]);
    }
    // 改变找房资源状态
    public function r(){
        $str=request()->param()['str'];
        $id=request()->param()['id'];
        if($str=="未解决"){
            $s=RequestModel::where('id',$id)->update(['is_over'=>1]);
            if($s){
                $res=[
                    'code'=>100,
                    'msg'=>'已解决'
                ];
                return json($res);
            }
        }
    }

    
    /**
     * 显示预约看房列表
     *
     * @return \think\Response
     */
    public function yue()
    {
        //
        if(request()->isGet()){
            $data=Zhi::order('id','desc')->paginate(15);
        }else{
            $res=request()->param();
            $where=[];
            if($res['phone']){
                $where['phone']=['eq',$res['phone']];
            }
            if($res['building_name']){
                $id=Goods::where('building_name','like','%'.$res['building_name'].'%')->column('id');
                $where['bid']=['in',$id];
            }
            
            $data=Zhi::order('id','desc')->where($where)->paginate(15);
        }
        
        foreach($data as $v){
            $v['building_name']=Goods::where('id','eq',$v['bid'])->column('building_name')[0];
        }
        return view('yue',['data'=>$data]);
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
     * 删除看房请求
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
        Tel::destroy($id);
        $this->redirect('index');
    }

    // 删除预约看房
    public function del($id){
        Zhi::destroy($id);
        $this->redirect('yue');
    }

    // 删除报名1
    public function de($id){
        Port1::destroy($id);
        $this->redirect('bao');
    }

    // 删除报名2
    public function d($id){
        Hmsg::destroy($id);
        $this->redirect('shou');
    }


    // 报名入口1
    public function bao(){
        if(request()->isGet()){
            $data=Port1::order('id','desc')->paginate(15);
        }else{
            $res=request()->param();
            $where=[];
            if($res['building_name']){
                $id=Goods::where('building_name','like','%'.$res['building_name'].'%')->column('id');
                $where['bid']=['in',$id];
            }
            
            if($res['phone']){
                $where['phone']=['eq',$res['phone']];
            }
            
            $data=Port1::order('id','desc')->where($where)->paginate(15);
        }
        foreach($data as $v){
            $v['building_name']=Goods::where('id','eq',$v['bid'])->column('building_name')[0];
        }
        return view('bao',['data'=>$data]);
    }


    // 报名入口2
    public function shou(){
        if(request()->isGet()){
            $data=Hmsg::order('id','desc')->paginate(15);
        }else{
            $res=request()->param();
            $where=[];
            if($res['building_name']){
                $id=Goods::where('building_name','like','%'.$res['building_name'].'%')->column('id');
                $where['bid']=['in',$id];
            }
            
            if($res['phone']){
                $where['tel']=['eq',$res['phone']];
            }
            $data=Hmsg::order('id','desc')->where($where)->paginate(15);
        }
        foreach($data as $v){
            $v['building_name']=Goods::where('id','eq',$v['bid'])->column('building_name')[0];
        }
        return view('shou',['data'=>$data]);
    }


    // 客户留言
    public function liu(){
        if(request()->isGet()){
            $data=Liu::order('id','desc')->paginate(15);
            
        }else{
            $res=request()->param();
            $where=[];
            if($res['building_name']){
                $id=Goods::where('building_name','like','%'.$res['building_name'].'%')->column('id');
                $where['bid']=['in',$id];
            }
            if($res['phone']){
                $where['tel']=['eq',$res['phone']];
            }
            $data=Liu::order('id','desc')->where($where)->paginate(15);
        }
        foreach($data as $v){
            $v['building_name']=Goods::where('id','eq',$v['bid'])->column('building_name')[0];
        }
        return view('liu',['data'=>$data]);
    }

    // 客户留言删除
    public function liudel($id){
        Liu::destroy($id);
        $this->redirect('liu');
    }

    // 预约看房
    public function yu(){
        if(request()->isGet()){
            $data=Yu::order('id','desc')->paginate(15);
        }else{
            $res=request()->param();
            $where=[];
            if($res['building_name']){
                $id=Goods::where('building_name','like','%'.$res['building_name'].'%')->column('id');
                $where['bid']=['in',$id];
            }
            if($res['phone']){
                $where['phone']=['eq',$res['phone']];
            }
            $data=Yu::order('id','desc')->where($where)->paginate(15);
        }
        foreach($data as $v){
            $v['building_name']=Goods::where('id','eq',$v['bid'])->column('building_name')[0];
        }
        return view('yu',['data'=>$data]);
    }

    // 删除预约看房
    public function yudel($id){
        Yu::destroy($id);
        $this->redirect('yu');
    }
}


