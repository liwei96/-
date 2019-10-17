<?php

namespace app\home\controller;

use think\Controller;
use think\Request;
use think\Session;
use app\home\model\Goods;
use app\home\model\Xiaoimgs;
use app\home\model\Ping;
use app\home\model\User;
use app\home\model\Tel;
use app\home\model\Zhi;
use app\home\model\Huimgs;
use app\home\model\Shiimgs;
use app\home\model\Yangimgs;
use app\home\model\Peiimgs;
use app\home\model\Jiaoimgs;
use app\home\model\Hmsg;
use app\home\model\Man;
use app\home\model\Text;
use app\home\model\Dping;
use app\home\model\Liu;
use app\home\model\Zimg;
use app\home\model\Zhu;
use app\home\model\Port1;
use app\home\model\Yu;

class Mine extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index($id)
    {
        //
        $data=Goods::where('id','eq',$id)->find();
        $xiaos=Xiaoimgs::where('bid','eq',$id)->paginate(1);
        $pings=Ping::where('bid','eq',$id)->order('id','desc')->paginate(3);
        $zhu=Zhu::where('bid','eq',$id)->select();
        // dump($pings);die();
        foreach($pings as $v){
            $v['tel']=User::where('id','eq',$v['u_id'])->column('phone')[0];
            $v['tel']=substr($v['tel'],0,3).'****'.substr($v['tel'],7);
        }
        return view('index',['data'=>$data,'xiao'=>$xiaos,'pings'=>$pings,'zhu'=>$zhu]);
    }

    public function login($id){
        return view('login',['id'=>$id]);
    }
    public function ping($id){
        $pings=Ping::where('bid','eq',$id)->select();
        foreach($pings as $v){
            $v['tel']=User::where('id','eq',$v['u_id'])->column('phone')[0];
            $v['tel']=substr($v['tel'],0,3).'****'.substr($v['tel'],7);
        }
        return view('ping',['pings'=>$pings,'id'=>$id]);
    }
    public function intro($id){
        $data=Goods::where('id','eq',$id)->find();
        $himgs=Huimgs::where('bid','eq',$id)->paginate(2);
        $ximgs=Xiaoimgs::where('bid','eq',$id)->select();
        $pimgs=Peiimgs::where('bid','eq',$id)->select();
        $man=Man::where('bid','eq',$id)->find();
        $all=$man['all'];
        $all=$all*5;
        $huan=round($man['huan']/$all,2);
        $jiao=round($man['jiao']/$all,2);
        $zhou=round($man['zhou']/$all,2);
        $shang=round($man['shang']/$all,2);
        return view('intro',['data'=>$data,'himgs'=>$himgs,'ximgs'=>$ximgs,'pimgs'=>$pimgs,'huan'=>$huan,'jiao'=>$jiao,'zhou'=>$zhou,'shang'=>$shang]);
    }

    public function detail($id){
        $data=Goods::where('id','eq',$id)->find();
        return view('detail',['data'=>$data]);
    }

    public function potos($id){
        $huimgs=Huimgs::where('bid','eq',$id)->select();
        $ximgs=Xiaoimgs::where('bid','eq',$id)->select();
        $simgs=Shiimgs::where('bid','eq',$id)->select();
        $yimgs=Yangimgs::where('bid','eq',$id)->select();
        $pimgs=Peiimgs::where('bid','eq',$id)->select();
        $jimgs=Jiaoimgs::where('bid','eq',$id)->select();
        $name=Goods::where('id','eq',$id)->column('building_name')[0];
        return view('potos',['huimgs'=>$huimgs,'ximgs'=>$ximgs,'simgs'=>$simgs,'yimgs'=>$yimgs,'pimgs'=>$pimgs,'jimgs'=>$jimgs,'id'=>$id,'name'=>$name]);
    }


    public function zhou($id){
        $data=Goods::where('id','eq',$id)->find();
        return view('zhou',['data'=>$data]);
    }

    public function hu($id){
        $huimgs=Huimgs::where('bid','eq',$id)->select();
        $name=Goods::where('id','eq',$id)->column('building_name')[0];
        return view('hu',['huimgs'=>$huimgs,'id'=>$id,'name'=>$name]);
    }

    public function hufen($id){
        $data=Huimgs::where('id','eq',$id)->find();
        $building=Goods::where('id','eq',$data['bid'])->find();
        return view('hufen',['data'=>$data,'building'=>$building]);
    }

    public function dong($id){
        $text=Text::where('bid','eq',$id)->select();
        return view('dong',['text'=>$text,'id'=>$id]);
    }

    public function dongtail($id){
        $data=Text::where('id','eq',$id)->find();
        $data['name']=Goods::where('id','eq',$data['bid'])->column('building_name')[0];
        $pings=Dping::where('did','eq',$id)->select();
        foreach($pings as $v){
            $v['tel']=User::where('id','eq',$v['uid'])->column('phone')[0];
            $v['tel']=substr($v['tel'],0,3).'****'.substr($v['tel'],7);
        }
        return view('dongtail',['data'=>$data,'pings'=>$pings]);
    }

    public function lian($id){
        $name=Goods::where('id','eq',$id)->find();
        return view('concat',['id'=>$id,'name'=>$name]);
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


    public function yu(){
        $data=request()->param();
        $name=$data['name'];
        $building=Goods::where('id','eq',$data['bid'])->column('building_name')[0];
        $tel=$data['phone'];
        sc_send('预约看房','客户名字是'.$name.'；电话是：'.$tel.'；楼盘是：'.$building.'；推广三');
        Yu::create($data);
        return json(['code'=>200]);
    }



    public function fy($id){
        $data=Goods::where('id','eq',$id)->find();
        return view('fangte',['data'=>$data]);
    }
    public function sy($id){
        $data=Goods::where('id','eq',$id)->find();
        return view('shang',['data'=>$data]);
    }
    public function wy($id){
        $data=Goods::where('id','eq',$id)->find();
        return view('wuyete',['data'=>$data]);
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
