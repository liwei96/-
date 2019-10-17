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

class Index extends Controller
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
        $xiaos=Xiaoimgs::where('bid','eq',$id)->paginate(3);
        $pings=Ping::where('bid','eq',$id)->order('id','desc')->paginate(4);
        $zhu=Zimg::where('bid','eq',$id)->select();
        // dump($pings);die();
        foreach($pings as $v){
            $v['tel']=User::where('id','eq',$v['u_id'])->column('phone')[0];
            $v['tel']=substr($v['tel'],0,3).'****'.substr($v['tel'],7);
        }
        return view('index',['data'=>$data,'xiao'=>$xiaos,'pings'=>$pings,'zhu'=>$zhu]);
    }

    public function lian($id){
        $data=Goods::where('id','eq',$id)->find();
        return view('lian',['id'=>$id,'data'=>$data]);
    }
    public function liu(){
        $data=request()->param();
        $name=$data['name'];
        $building=Goods::where('id','eq',$data['bid'])->find();
        $con=$data['con'];
        $tel=$data['tel'];
        sc_send($building.'的留言','客户名字是'.$name.'；电话是：'.$tel.'；留言内容是：'.$con.'；推广三');
        Liu::create($data);
        return json(['code'=>200]);
    }

    public function dong($id){
        $data=Goods::where('id','eq',$id)->find();
        $dongs=Text::where('bid','eq',$id)->select();
        return view('dong',['data'=>$data,'dongs'=>$dongs]);
    }
    public function getding(){
        $id=request()->param()['id'];
        $data=Dping::where('did','eq',$id)->order('id','desc')->limit(0,2)->select();
        foreach($data as $v){
            $v['tel']=User::where('id','eq',$v['uid'])->column('phone')[0];
            $v['tel']=substr($v['tel'],0,3).'****'.substr($v['tel'],7);
        }
        return json(['code'=>200,'data'=>$data]);
    }
    public function photo($id){
        $huimgs=Huimgs::where('bid','eq',$id)->select();
        $ximgs=Xiaoimgs::where('bid','eq',$id)->select();
        $simgs=Shiimgs::where('bid','eq',$id)->select();
        $yimgs=Yangimgs::where('bid','eq',$id)->select();
        $pimgs=Peiimgs::where('bid','eq',$id)->select();
        $jimgs=Jiaoimgs::where('bid','eq',$id)->select();

        return view('photo',['huimgs'=>$huimgs,'ximgs'=>$ximgs,'simgs'=>$simgs,'yimgs'=>$yimgs,'pimgs'=>$pimgs,'jimgs'=>$jimgs,'id'=>$id]);
    }
    public function introduce($id){ 
        $data=Goods::where('id','eq',$id)->find();
        $pings=Ping::where('bid','eq',$id)->order('id','desc')->paginate(3);
        $himgs=Huimgs::where('bid','eq',$id)->select();
        $alls=Huimgs::where('bid','eq',$id)->count('id');
        $one=Huimgs::where('bid','eq',$id)->where('ji','eq',1)->count('id');
        $ones=Huimgs::where('bid','eq',$id)->where('ji','eq',1)->select();
        $two=Huimgs::where('bid','eq',$id)->where('ji','eq',2)->count('id');
        $twos=Huimgs::where('bid','eq',$id)->where('ji','eq',2)->select();
        $thre=Huimgs::where('bid','eq',$id)->where('ji','eq',3)->count('id');
        $thres=Huimgs::where('bid','eq',$id)->where('ji','eq',3)->select();
        $four=Huimgs::where('bid','eq',$id)->where('ji','eq',4)->count('id');
        $fours=Huimgs::where('bid','eq',$id)->where('ji','eq',4)->select();
        $five=Huimgs::where('bid','eq',$id)->where('ji','eq',5)->count('id');
        $fives=Huimgs::where('bid','eq',$id)->where('ji','eq',5)->select();
        $zimgs=Zhu::where('bid','eq',$id)->select();
        $man=Man::where('bid','eq',$id)->find();
        $all=$man['all'];
        $all=$all*5;
        $huan=round($man['huan']/$all,2);
        $jiao=round($man['jiao']/$all,2);
        $zhou=round($man['zhou']/$all,2);
        $shang=round($man['shang']/$all,2);
        foreach($pings as $v){
            $v['tel']=User::where('id','eq',$v['u_id'])->column('phone')[0];
            $v['tel']=substr($v['tel'],0,3).'****'.substr($v['tel'],7);
        }
        return view('introduce',['data'=>$data,'pings'=>$pings,'himgs'=>$himgs,'two'=>$two,'twos'=>$twos,'thre'=>$thre,'thres'=>$thres,'one'=>$one,'ones'=>$ones,'five'=>$five,'fives'=>$fives,
        'four'=>$four,'fours'=>$fours,'huan'=>$huan,'jiao'=>$jiao,'zhou'=>$zhou,'shang'=>$shang,'zimgs'=>$zimgs,'alls'=>$alls]);
    }

    public function num(){
        $data=request()->param();
        $id=$data['id'];
        Ping::where('id','eq',$id)->update($data);
        return json(['code'=>200]);
    }
    public function sping(){
        if(Session::has('user')){
            $data=request()->param();
            $data['u_id']=Session::get('user')['id'];
            $data['num']=0;
            Ping::create($data);
            return json(['code'=>200]);
        }else{
            return json(['code'=>300]);
        }
        
    }
    function juhecurl($url,$params=false,$ispost=0){
        $httpInfo = array();
        $ch = curl_init();
        curl_setopt( $ch, CURLOPT_HTTP_VERSION , CURL_HTTP_VERSION_1_1 );
        curl_setopt( $ch, CURLOPT_USERAGENT , 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.22 (KHTML, like Gecko) Chrome/25.0.1364.172 Safari/537.22' );
        curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT , 30 );
        curl_setopt( $ch, CURLOPT_TIMEOUT , 30);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER , true );
        if( $ispost )
        {
            curl_setopt( $ch , CURLOPT_POST , true );
            curl_setopt( $ch , CURLOPT_POSTFIELDS , $params );
            curl_setopt( $ch , CURLOPT_URL , $url );
        }
        else
        {
            if($params){
                curl_setopt( $ch , CURLOPT_URL , $url.'?'.$params );
            }else{
                curl_setopt( $ch , CURLOPT_URL , $url);
            }
        }
        $response = curl_exec( $ch );
        if ($response === FALSE) {
            //echo "cURL Error: " . curl_error($ch);
            return false;
        }
        $httpCode = curl_getinfo( $ch , CURLINFO_HTTP_CODE );
        $httpInfo = array_merge( $httpInfo , curl_getinfo( $ch ) );
        curl_close( $ch );
        return $response;
    }
    public function sendmsg($phone,$msg){
        $sendUrl = 'http://v.juhe.cn/sms/send'; //短信接口的URL
  
        $smsConf = array(
            'key'   => 'a7289630cca0320602d260376d297abd', //您申请的APPKEY
            'mobile'    => $phone, //接受短信的用户手机号码
            'tpl_id'    => '156429', //您申请的短信模板ID，根据实际情况修改
            'tpl_value' =>"#code#=$msg" //您设置的模板变量，根据实际情况修改
        );
        $content = $this->juhecurl($sendUrl,$smsConf,1); //请求发送短信
 
        if($content){
            $result = json_decode($content,true);
            $error_code = $result['error_code'];
            if($error_code == 0){
                //状态为0，说明短信发送成功
                return true;
            }else{
                //状态非0，说明失败
               return false;
            }
        }else{
            //返回内容异常，以下可根据业务逻辑自行修改
            echo "请求发送短信失败";
        }

    }



    public function login(){
        if(request()->isGet()){
            return view();
        }else if(request()->isPost()){
            $data=request()->param();
            $phone=$data['phone'];
            $ma=mt_rand(1000,9999);
            if (!preg_match('/^1[3-9]\d{9}$/', $phone)) {
                $res = [
                    'code' => 10001,
                    'msg' => '手机号格式错误',
                ];
                return json($res);
            }
            $register_time = cache($phone.'time') ? : 0;
            if (time() - $register_time < 60) {
                $res = [
                    'code' => 10003,
                    'msg' => '发送太频繁，稍后再试',
                ];
                return json($res);
            }
            
            $result=$this->sendmsg($phone,$ma);
            // $result=true;
            if($result){
                cache($phone,$ma,300);
                cache($phone.'time',time());
                $res=[
                    'code' => 100,
                ];
                return json($res);
            }else{
                $res=[
                    'code' => 200,
                    'msg' => '发送失败'
                ];
                return json($res);
            }
        }
    }
    public function log(){
        $data=request()->param();
        $phone=$data['phone'];
        $ma=$data['code'];
        if (!preg_match('/^1[3-9]\d{9}$/', $phone)) {
            $res = [
                'code' => 10001,
                'msg' => '手机号格式错误',
            ];
            return json($res);
        }
        if($ma==''){
            $res = [
                'code' => 10002,
                'msg' => '验证码不能为空',
            ];
            return json($res);
        }
        if($ma==cache($phone)){
            cache($phone,null);
            $s=User::where('phone',$phone)->find();
            
            if($s){
                Session::set('user',$s);
            }else{
                User::create(['phone'=>$phone]);
                $s=User::where('phone',$phone)->find();
                Session::set('user',$s);
            }
            $s['p']=substr($s['phone'],0,3).'*'.substr($s['phone'],9,2);
            $res=[
                'code'=>200
            ];
            return json($res);
        }else{
            $res = [
                'code' => 10003,
                'msg' => '验证码错误',
                'ma'=>cache($phone)
            ];
            return json($res);
        }
    }


    public function tel(){
        $data=request()->param();
        $name=Goods::where('id','eq',$data['bid'])->column('building_name')[0];
        $tel=$data['phone'];
        sc_send('用户想要获取'.$name.'的详细楼盘资料；'.'电话是'.$tel,'123'.'；推广三');
        Tel::create($data);
        return json(['code'=>200]);
    }

    public function zhi(){
        $data=request()->param();
        $name=$data['name'];
        $building=Goods::where('id','eq',$data['bid'])->column('building_name')[0];
        $tel=$data['phone'];
        sc_send('用户想要'.$building.'的置业顾问分配','电话是'.$tel.'；名字是'.$name.'；推广三');
        Zhi::create($data);
        return json(['code'=>200]);
    }

    public function hmsg(){
        $data=request()->param();
        $name=$data['name'];
        $building=Goods::where('id','eq',$data['bid'])->column('building_name')[0];
        $con=$data['con'];
        $tel=$data['tel'];
        sc_send('用户想要了解'.$building.'的房源报价','电话是'.$tel.'；名字是'.$name.'；户型是'.$con.'；推广三');
        Hmsg::create($data);
        return json(['code'=>200]);
    }

    public function man(){
        $data=request()->param();
        $bid=$data['bid'];
        $man=Man::where('bid','eq',$bid)->find();
        if($man){
            $h=$man['huan'];
            $j=$man['jiao'];
            $z=$man['zhou'];
            $s=$man['shang'];
            $a=$man['all'];
            $data['huan']=$h+$data['huan'];
            $data['jiao']=$j+$data['jiao'];
            $data['zhou']=$z+$data['zhou'];
            $data['shang']=$s+$data['shang'];
            $a=$a+1;
            $data['all']=$a;
            Man::where('bid','eq',$bid)->update($data);
        }else{
            $data['all']=1;
            Man::create($data);
        }
        
        return json(['code'=>200]);
    }

    public function dping(){
        if(Session::has('user')){
            $data=request()->param();
            $data['uid']=Session::get('user')['id'];
            Dping::create($data);
            return json(['code'=>200]);
        }else{
            return json(['code'=>300]);
        }
        

    }

    public function port1(){
        $data=request()->param();
        $building=Goods::where('id','eq',$data['bid'])->column('building_name')[0];
        $name=$data['name'];
        $tel=$data['phone'];
        sc_send('用户想要获取'.$building.'的预售证详情','电话是'.$tel.'；名字是'.$name.'；推广三');
        Port1::create($data);
        return json(['code'=>200]);
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
