<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"D:\phpstudy_pro\WWW\tp3\public/../application/home\view\index\introduce.html";i:1567048213;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/static/home/css/common/common.css">
    <link rel="stylesheet" href="/static/home/css/project_intro.css">
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_1329849_ac0mwjh2267.css">
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_910507_hzufm6hpwxd.css">
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_1329849_hw0d1vje3rp.css">
    <link rel="stylesheet" href="/static/home/css/index1.css">
    <link rel="stylesheet" href="/static/home/css/contact.css">
    <link rel="stylesheet" href="/static/home/css/project_intro.css">
    <link rel="stylesheet" href="https://cache.amap.com/lbs/static/main1119.css"/>
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_1329849_bsjfymxufr.css">
    <link rel="stylesheet" href="/static/home/css/swiper.min.css">
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_1367531_3t0litim5l6.css">
    <style type="text/css">
        li{
            list-style:none;
        }
        *{
            padding:0;
            margin:0;
        }
        .mo-ti{
            z-index: 1000;
        }
        .h-box{
            height:521px;
            overflow: hidden;
        }
        .mo-baojia{
            z-index: 1000;
        }
        .mo-baojias{
            width: 100%;
            height: 4000px;
            background-color: rgba(0,0,0,0.4);
            position: fixed;
            top: 0;
            left: 0;
            display: none;
            z-index: 1000;
        }
        .mo-baojias .baojia-success {
            width: 340px;
            height: 360px;
            margin: 0 auto;
            position: fixed;
            top: 50%;
            margin-left: -170px;
            margin-top: -180px;
            left: 50%;
            background: rgba(255,255,255,1);
            border-radius: 8px;
        }
        .baojia-content .queren5 {
            width: 260px;
            height: 38px;
            background: linear-gradient(270deg,rgba(102,207,255,1),rgba(76,181,255,1));
            border-radius: 2px;
            border: none;
            font-size: 16px;
            font-family: 'MicrosoftYaHei';
            font-weight: 400;
            color: rgba(255,255,255,1);
            line-height: 32px;
            margin-top: 40px;
            margin-left: 40px;
        }
        .swiper-container{
            width: 650px;
           height: 480px;
        }
        .swiper-container  .swiper-wrapper .swiper-slide img {
            width: 650px;
           height: 480px;
        }

        /*自定义按钮样式*/
        .mySwiperBtn{
            background-image: url('/static/home/imgs/left.png');
            background-repeat:no-repeat;
            width: 30px;
            height: 60px;
            background: rgba(0,0,0,0.4);
            color: #fff;
            font-size: 30px;
            line-height: 60px;
            text-align: center;

        }
        .mySwiperBtn img{
            width:9px;
        }
        .swiper-button-prev,.swiper-container-rtl .swiper-button-next{
            left: 10px;
        }
        .swiper-button-next,.swiper-container-rtl .swiper-button-prev{
            right: 10px;
        }
        .mySwiperBtn:hover{
            background: rgba(0,0,0,0.8)
        }
        .swiper-container:hover .mySwiperBtn{
            display: block;
        }
        </style>

    <script src="/static/home/js/common.js"></script>
    <title>项目介绍</title>
</head>
<body>
        <div class="header">
                <div class="header-cen">
                  <h1><img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1564563508716&di=0ba2528b7671fc67109f8da354956575&imgtype=0&src=http%3A%2F%2Fimg.cndesign.com%2Fupload%2Fnews%2F20180408%2Fd5039b0992584fbf98b00da57e33b528.jpg" alt=""></h1>
                    <div class="header-select">
                        <a href="<?php echo url('home/index/index',['id'=>$data['id']]); ?>" >首页</a>
                        <a href="<?php echo url('home/index/introduce',['id'=>$data['id']]); ?>" class="activehead">项目介绍</a>
                        <a href="<?php echo url('home/index/dong',['id'=>$data['id']]); ?>">楼盘动态</a>
                        <a href="<?php echo url('home/index/photo',['id'=>$data['id']]); ?>">楼盘图册</a>
                        <a href="<?php echo url('home/index/lian',['id'=>$data['id']]); ?>">联系我们</a>
                        <a href="javascript:;"  class="denglu">登录/注册</a>
                        <span class="iconfont icondianhua"></span>
                        <i>售楼处电话：19884188894</i>
                    </div>
                </div>
            </div>
 <!-- 项目内容-->
            <div class="project-con">
                <div class="project-con-cen">

                        <!-- <div class="box">
                            <ul class="item">
                                <li style="opacity: 1"><img src="/static/home/imgs/1.jpg"></li>
                                <li><img src="/static/home/imgs/2.jpg"></li>
                                <li><img src="/static/home/imgs/3.jpg"></li>
                                <li><img src="/static/home/imgs/4.jpg"></li>
                                <li><img src="/static/home/imgs/5.jpg"></li>
                            </ul>
                            <a  href="javascript:;" class="leftBtn iconfont iconjiantouzuo"></a>
                            <a  href="javascript:;" class="rightBtn iconfont iconjiantouyou"></a>
                        
                            <ul class="page"><li>1</li><li>2</li><li>3</li><li>4</li><li>5</li></ul>
                
                        </div> -->
                        <div class="box">
                        <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <?php foreach($zimgs as $v): ?>
                                  <div class="swiper-slide"><img src="<?php echo $v['img']; ?>"></div>
                                  <?php endforeach; ?>
                                  
                         </div>
                                <!-- Add Arrows -->
                                <div class="swiper-button-next mySwiperBtn"><img src="/static/home/imgs/right.png" alt=""></div>
                                <div class="swiper-button-prev mySwiperBtn right"><img src="/static/home/imgs/left.png" alt=""></div>
                       </div>
                    </div>
                        <div class="pro-con">
                            <div class="detail">
                                    <h3><?php echo $data['building_name']; ?></h3>
                                    <p><span>项目单价：</span><i><?php echo $data['danjia']; ?>/m²   (价格有效期至2019年09月16日)</i></p>
                                    <p><span>项目地址：</span><i><?php echo $data['building_address']; ?></i></p>
                                    <p><span>楼盘类型：</span><i><?php echo $data['building_xingshi']; ?></i></p>
                                    <p><span>主力户型：</span><i><?php echo $data['humianji']; ?>m²</i></p>
                                    <p><span>开盘时间：</span><i><?php echo $data['kaitime']; ?></i></p>
                                    <p><span>最新预售许可证：</span><i><?php echo $data['yushou']; ?></i><a href="javascript:;" class="yushou" >预售证详情</a></p>
                            </div>
                             <div class="tel">
                                    <div class="left-tel">
                                        <h3>400-8888-777</h3>
                                        <p>致电售楼处了解更多信息</p>
                                    </div>
                                    <div class="tel-img">
                                         <img src="/static/home/imgs/tel.png" alt="">   
                                    </div>
                             </div>
                            <div class="you">
                                <h4>项目优势</h4><br/>
                                <p>1、<?php echo $data['you_one']; ?></p><br/>
                                <p>2、<?php echo $data['you_two']; ?></p><br/>
                                <p>3、<?php echo $data['you_thre']; ?></p><br/>
                            </div>

                        </div>
                 </div>
            </div>
 <!--主力户型 -->
 <div class="main-hu">
        <div class="main-hu-cen">
                    <h3>主力户型</h3>
            <div class="big-box">
                    <div class="box-huxing">
                            <ul id="menu">
                                <li class="active">全部 (<?php echo $alls; ?>)</li>
 				 <li >一室(<?php echo $one; ?>)</li>
                                <li >二室(<?php echo $two; ?>)</li>
                                <li >三室 (<?php echo $thre; ?>)</li>
                                <li >四室 (<?php echo $four; ?>)</li>
				<li >四室 以上(<?php echo $five; ?>)</li>
                            </ul>
                            <div id="panel">
                                <div class="panel active">
                                    <div class="h-box">
                                            <ul class="hu-list">
                                                    <?php foreach($himgs as $v): ?>
                                                        <li>
                                                            <div class="img-hu">
                                                                    <img src="<?php echo $v['h_big']; ?>" alt="">
                                                            </div>
                                                            <div class="hu-con">
                                                               <p><span><?php echo $v['content']; ?>   建面：<?php echo $v['mian']; ?>m²</span><a href="">在售</a><i><?php echo $v['jia']; ?><em>万起</em></i></p> 
                                                               <p><span>特点：<?php echo $data['building_tese']; ?></span><i>类型：<?php echo $v['lei']; ?></i> <a href="javascript:;" class="liaojie" data-v="<?php echo $v['content']; ?>" data-j="<?php echo $v['mian']; ?>" data-id="<?php echo $v['id']; ?>">了解房源报价</a></p>
                                                               <p> 
                                                                    户型分析：<?php echo $v['fen']; ?>。
                                                                </p>
                                                            </div>
                                                        </li>
                                                    <?php endforeach; ?>
                                                       
                                                      
                                                    </ul>
                                    </div>
                                    
                                        <a href="javascript:;" class="geng-duo">查看更多</a>
                                </div>
                                <div class="panel">
                                    <ul class="hu-list">
                                        <?php foreach($ones as $v): ?>
                                            <li>
                                                <div class="img-hu">
                                                        <img src="<?php echo $v['h_big']; ?>" alt="">
                                                </div>
                                                <div class="hu-con">
                                                   <p><span><?php echo $v['content']; ?>   建面：<?php echo $v['mian']; ?>m²</span><a href="">在售</a><i><?php echo $v['jia']; ?><em>万起</em></i></p> 
                                                   <p><span>特点：<?php echo $data['building_tese']; ?></span><i>类型：<?php echo $v['lei']; ?></i> <a href="javascript:;" class="liaojie" data-v="<?php echo $v['content']; ?>" data-j="<?php echo $v['mian']; ?>" data-id="<?php echo $v['id']; ?>">了解房源报价</a></p>
                                                   <p> 
                                                        户型分析：<?php echo $v['fen']; ?>。
                                                    </p>
                                                </div>
                                            </li>
                                        <?php endforeach; ?>
                                           
                                          
                                        </ul>
                                </div>
                                <div class="panel">
                                    <ul class="hu-list">
                                        <?php foreach($twos as $v): ?>
                                            <li>
                                                <div class="img-hu">
                                                        <img src="<?php echo $v['h_big']; ?>" alt="">
                                                </div>
                                                <div class="hu-con">
                                                   <p><span><?php echo $v['content']; ?>   建面：<?php echo $v['mian']; ?>m²</span><a href="">在售</a><i><?php echo $v['jia']; ?><em>万起</em></i></p> 
                                                   <p><span>特点：<?php echo $data['building_tese']; ?></span><i>类型：<?php echo $v['lei']; ?></i> <a href="javascript:;" class="liaojie" data-v="<?php echo $v['content']; ?>" data-j="<?php echo $v['mian']; ?>" data-id="<?php echo $v['id']; ?>">了解房源报价</a></p>
                                                   <p> 
                                                        户型分析：<?php echo $v['fen']; ?>。
                                                    </p>
                                                </div>
                                            </li>
                                        <?php endforeach; ?>
                                           
                                          
                                        </ul>
                                    </div>
                                <div class="panel">
                                    <ul class="hu-list">
                                        <?php foreach($thres as $v): ?>
                                            <li>
                                                <div class="img-hu">
                                                        <img src="<?php echo $v['h_big']; ?>" alt="">
                                                </div>
                                                <div class="hu-con">
                                                   <p><span><?php echo $v['content']; ?>   建面：<?php echo $v['mian']; ?>m²</span><a href="">在售</a><i><?php echo $v['jia']; ?><em>万起</em></i></p> 
                                                   <p><span>特点：<?php echo $data['building_tese']; ?></span><i>类型：<?php echo $v['lei']; ?></i> <a href="javascript:;" class="liaojie" data-v="<?php echo $v['content']; ?>" data-j="<?php echo $v['mian']; ?>" data-id="<?php echo $v['id']; ?>">了解房源报价</a></p>
                                                   <p> 
                                                        户型分析：<?php echo $v['fen']; ?>。
                                                    </p>
                                                </div>
                                            </li>
                                        <?php endforeach; ?>
                                           
                                          
                                        </ul>
                                </div>
                                <div class="panel">
                                        <ul class="hu-list">
                                            <?php foreach($fours as $v): ?>
                                                <li>
                                                    <div class="img-hu">
                                                            <img src="<?php echo $v['h_big']; ?>" alt="">
                                                    </div>
                                                    <div class="hu-con">
                                                       <p><span><?php echo $v['content']; ?>   建面：<?php echo $v['mian']; ?>m²</span><a href="">在售</a><i><?php echo $v['jia']; ?><em>万起</em></i></p> 
                                                       <p><span>特点：<?php echo $data['building_tese']; ?></span><i>类型：<?php echo $v['lei']; ?></i> <a href="javascript:;" class="liaojie" data-v="<?php echo $v['content']; ?>" data-j="<?php echo $v['mian']; ?>" data-id="<?php echo $v['id']; ?>">了解房源报价</a></p>
                                                       <p> 
                                                            户型分析：<?php echo $v['fen']; ?>。
                                                        </p>
                                                    </div>
                                                </li>
                                            <?php endforeach; ?>
                                               
                                              
                                            </ul>
                                </div>
                                <div class="panel">
                                        <ul class="hu-list">
                                            <?php foreach($fives as $v): ?>
                                                <li>
                                                    <div class="img-hu">
                                                            <img src="<?php echo $v['h_big']; ?>" alt="">
                                                    </div>
                                                    <div class="hu-con">
                                                       <p><span><?php echo $v['content']; ?>   建面：<?php echo $v['mian']; ?>m²</span><a href="">在售</a><i><?php echo $v['jia']; ?><em>万起</em></i></p> 
                                                       <p><span>特点：<?php echo $data['building_tese']; ?></span><i>类型：<?php echo $v['lei']; ?></i> <a href="javascript:;" class="liaojie" data-v="<?php echo $v['content']; ?>" data-j="<?php echo $v['mian']; ?>" data-id="<?php echo $v['id']; ?>">了解房源报价</a></p>
                                                       <p> 
                                                            户型分析：<?php echo $v['fen']; ?>。
                                                        </p>
                                                    </div>
                                                </li>
                                            <?php endforeach; ?>
                                               
                                              
                                            </ul>
                                </div>
                                        
                          </div>
                        
                    </div>

                    <div class="zixun">
                       <h4>高级置业顾问</h4>
                       <div class="text-box">
                            <div class="zi-pic"><img src="https://www.jy1980.com/static/home/imgs/people.png" alt=""></div>

                            <div class="zi-text">
                                <span class="name-n">张甜甜</span>
                                <p><span>咨询人数：</span><i>361</i></p>
                                <i>找她了解更多户型信息</i>
                            </div>
                            <div class="zi-btn">
                                <img src="/static/home/imgs/zixun.png" alt="">
                                <a href="javascript:;">向她咨询</a>
                            </div>
                       </div>
                    </div>
             </div>

        </div>
  </div>
 <!--楼盘详情 -->
 <div class="loupan-d">
     <div class="loupan-d-cen">
                <h3>楼盘详情</h3>
                <div class="get-tel">
                        <img src="/static/home/imgs/loudetail.png" alt="">
                        <div class="more-lou">
                            <h4>更多楼盘信息</h4>
                            <p>不想错过重要楼盘详情，立即了解更多</p>
                        </div>
                       <div  class="kuang-btn">
                            <input type="text" placeholder="请输入手机号"><a href="javascript:;" id="getmore" data-v="<?php echo $data['id']; ?>">了解更多</a>
                       </div> 
                </div>
                <div class="detail-lou">
                    <h4>基本信息</h4>
                    <ul class="left">
                        <li><span>楼盘名称</span> <?php echo $data['building_name']; ?></li>
                        <li><span>楼盘地址</span> <?php echo $data['building_address']; ?></li>
                        <li><span>建筑类型</span><?php echo $data['building_xingshi']; ?></li>
                        <li><span>装修状况</span><?php echo $data['building_zhuangxiu']; ?></li>
                        <li><span>物业费用</span>  <?php echo $data['wufei']; ?>元/m².月</li>
                        <li><span>开盘时间</span>  <?php echo $data['kaitime']; ?></li>
                    </ul>
                    <ul class="right">
                        <li><span>交房时间  </span>   <?php echo $data['jiaotime']; ?></li>
                        <li><span>物业公司 </span>  <?php echo $data['wuye']; ?></li>
                        <li><span>开&nbsp;&nbsp;发&nbsp;&nbsp;商</span> <?php echo $data['kaifa']; ?></li>
                        <li><span>绿&nbsp;&nbsp;化&nbsp;&nbsp;率</span><?php echo $data['lvhua']; ?></li>
                        <li><span>容&nbsp;&nbsp;积&nbsp;&nbsp;率</span><?php echo $data['rongji']; ?></li>
                        <li><span>车位情况</span><?php echo $data['chewei']; ?></li>
                    </ul>
                </div>
     </div>
 </div>
 <!--周边配套 -->
<div class="zhou">
    <div class="zhou-cen">
        <h4>周边配套</h4>
         <div class="map">
            <div id="container">
            </div>
            <div id="list">
                <ul>
                    <li class="activemap" id='2'>交通</li>
                    <li >教育</li>
                    <li >医疗</li>
                    <li >购物</li>
                    <li >生活</li>
                    <li >娱乐</li>
                   
                </ul>
            </div>
            <div class="bus">
                <ul>
                    <li class="dian">公交站</li>
                    <li>地铁站</li>
                </ul>
            </div>
            <div id="panel1">
            
            </div>
         </div>
    </div>
</div>
 <!--楼盘图册 -->
<div class="photo">
    <div class="photo-cen">
            <h4>楼盘图册</h4>
            <ul class="yuan-pic">
                <li><img src="https://www.jy1980.com/uploads/20190523/thumb_800_de431820e8ad634ba0db0be6b3fb28df.png" alt="" class="img"></li>
                <li><img src="https://www.jy1980.com/uploads/20190523/thumb_800_24447162289735d932309083f7cf0d7b.png" alt="" class="img"></li>
                <li><img src="https://www.jy1980.com/uploads/20190523/thumb_800_39d9d951faaad16a0dd01eb22dd1ca78.png" alt="" class="img"></li>
            </ul>
           
            
            <a href="javascript:;" class="more-pic">更多楼盘图册</a>
    </div>
</div>
 <!--客户满意度 -->
<div class="manyi">
    <div class="manyi-cen">
            <div class="left-commit">
                <?php foreach($pings as $v): ?>
                    <div class="big-talk" data-aos="fade-right" data-aos-offset="200" data-aos-easing="ease-in-sine">
                            <div class="left-talk">
                                <div class="head"><img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1564661814898&di=ea578fb4c9f4eecfcd814ac0869796c8&imgtype=0&src=http%3A%2F%2Fb-ssl.duitang.com%2Fuploads%2Fitem%2F201508%2F04%2F20150804211608_KLFV2.jpeg" alt=""></div>
                                <div class="talk-list">
                                    <div class="talk-time"><span><?php echo $v['tel']; ?> </span> <i><?php echo $v['create_time']; ?></i></div>   
                                    <p><?php echo $v['content']; ?></p>
                                </div>
                            </div>
                
                            <div class="rig-icon">
                                 <span class="iconfont iconlike" data-v="<?php echo $v['num']; ?>" data-id="<?php echo $v['id']; ?>"></span> 
                                 <i><?php echo $v['num']; ?></i> 
                            </div>
                    </div>
                <?php endforeach; ?>
                    
            </div>
            <div class="man-jin">
                    <h4>客户满意度</h4>
                    <div class="jin-tiao">
                            <ul class="manyi-list">
                                <li>
                                    <div class="zhu">
                                        <div class="wai"><div class="nei">环境:<?php echo $huan*100; ?>%满意度</div></div>
                                    </div>
                                   
                                </li>
                                <li>
                                    <div class="zhu">
                                        <div class="wai"><div class="nei">交通:<?php echo $jiao*100; ?>%满意度</div></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="zhu">
                                        <div class="wai"><div class="nei">周边:<?php echo $zhou*100; ?>%满意度</div></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="zhu">
                                        <div class="wai"><div class="nei">商业:<?php echo $shang*100; ?>%满意度</div></div>
                                    </div>
                                </li>
                                <li>
                                     <input type="button" value="满意度评论" class="manyi-btn">
                                </li>

                            </ul>
                           
                    </div>
                    
            </div>

    </div>
</div>
 
 <div class="footer">
    <div class="footer-cen">
        <ul>
            <li><a href="<?php echo url('home/index/index',['id'=>$data['id']]); ?>">首页</a></li>
            <li><a href="<?php echo url('home/index/introduce',['id'=>$data['id']]); ?>">项目介绍</a></li>
            <li><a href="<?php echo url('home/index/dong',['id'=>$data['id']]); ?>">楼盘动态</a></li>
            <li><a href="<?php echo url('home/index/photo',['id'=>$data['id']]); ?>">楼盘图册</a></li>
            <li><a href="<?php echo url('home/index/lian',['id'=>$data['id']]); ?>">联系我们</a></li>
              <li> <input type="text"  placeholder="输入您的手机查询详细楼盘资料"><a href="javascript:;" class="tel_ti">提交</a></li>
              <li><a href="javascript:;">售楼处电话：19884188894</a></li>
        </ul>
<p>Copyright © 2017 - 2022 杭州易得房科技有限公司有限公司版权所有 浙ICP备18057005号</p>


    </div>
</div>

 <!--提交成功模态框-->
 <div class="mo-ti">
    <div class="ti-success">
       <div class="biao">
            <img src="/static/home/imgs/ping0k.png" alt="" class="dui">
            <img src="/static/home/imgs/bai.png" alt="" class="guan queren2">
       </div>
       <div class="ti-content">
            <p>提交成功</p>
            <input type="button" value="确定" class="queren2">

       </div>
    </div>
</div>

<!--售楼处置业顾问模态框 -->
<div class="mo-success">
        <div class="ping-success">
           <div class="biao">
                <h4>售楼处置业顾问</h4>
                <img src="/static/home/imgs/bai.png" alt="" class="guan">
           </div>
           <div class="success-content">
                    <h3>高级置业顾问</h3>
                    <p>向售楼处了解更多详细的户型信息</p>
                   <form action="">
                       <div class="telnum">
                            <input type="text" placeholder="请输入手机号" id="ztel">
                       </div>
                      <div class="name">
                            <input type="text" placeholder="请输入姓名" id="zname">
                      </div>
                      
                       <input type="button" value="确定" class="queren3 queren2" data-v="<?php echo $data['id']; ?>">
                   </form>



           </div>
        </div>
</div>
<!--了解房源报价 -->
<div class="mo-baojia">
        <div class="baojia-success">
           <div class="biao">
                <h4>了解房源报价</h4>
                <img src="/static/home/imgs/bai.png" alt="" class="close">
           </div>
           <div class="baojia-content">
                    <h3>3室2厅2卫   建面120m²</h3>
                    <p>向售楼处了解详细最新房源报价</p>
                   <form action="">
                       <div class="telnum">
                            <input type="text" placeholder="请输入手机号" id="h_tel">
                       </div>
                      <div class="name">
                            <input type="text" placeholder="请输入姓名" id="h_name">
                      </div>
                      
                       <input type="button" value="确定" class="queren" data-v="<?php echo $data['id']; ?>">
                   </form>
           </div>
        </div>
</div>
<!--我要评价模态框 -->
 <div class="mo">
        <div class="ping-kuang">
            <div class="title2">
                <img src="/static/home/imgs/bktou.png" alt="">
                <img class="wenzi" src="/static/home/imgs/pingjia-text.png" alt="">
                <img src="/static/home/imgs/bai.png" alt=""  class="close-ping"></div>
            <div class="star-content">
                    <p>点击星星评价</p>
                    <div class="star-list">
                        <div class="star-left">
                            <ul>
                                <li>环境</li>
                                <li>交通</li>
                                <li>周边</li>
                                <li>商业</li>
                            </ul>
                        </div>
                        <div class="star-rig">	
                            <div class="comment-star  ">			
                            </div>

                            <div class="comment-star1  ">			
                            </div>

                            <div class="comment-star2  ">			
                            </div>

                            <div class="comment-star3  ">			
                            </div>
                        </div>
                <input type="button" value="发表" data-v="<?php echo $data['id']; ?>" class="star-commit"/>
                    </div>
                   
            </div>
        </div>
</div>
<!--预售证详情模态框 -->
<div class="mo-baojias">
        <div class="baojia-success">
           <div class="biao">
                <h4>预售证详情</h4>
                <img src="/static/home/imgs/bai.png" alt="" class="close">
           </div>
           <div class="baojia-content">
                    <h3>世茂泰禾·中央广场</h3>
                    <p>向售楼处了解详细预售许可证详情</p>
                   <form action="">
                       <div class="telnum">
                            <input type="text" placeholder="请输入手机号" id="ytel">
                       </div>
                      <div class="name">
                            <input type="text" placeholder="请输入姓名" id="yname">
                      </div>
                      
                       <input type="button" value="确定" class="queren5" data-v="<?php echo $data['id']; ?>">
                   </form>



           </div>
        </div>
</div>
<!--放大图片功能-->
<div id="outerdiv" style="position:fixed;top:0;left:0;background:rgba(0,0,0,0.7);z-index:1000;width:100%;height:100%;display:none;">
    <div id="innerdiv" style="position:absolute;">
        <img id="bigimg" style="border:5px solid #fff;" src="" />
    </div>
</div>
<div class="login">
    <div class="login-success">
       <div class="biao">
           <p>快速登录</p>
            <img src="/static/home/imgs/close.png" alt="" class="login-close">
       </div>
       <div class="login-content">
           <div class="login-input">
                    <form action="">
                        <div class="yanma">
                          <input type="text" class="telphone" placeholder="输入手机号">
                        </div>
                        <div class="yanma">
                            <input type="text" placeholder="输入验证码" class="yan">
                            <input type="button" value="获取验证码" class="ma">
                            <!-- <button class="ma">获取验证码</button> -->
                        </div>
                         
                          <input type="button" value="登录" class="deng">
                    </form>
           </div>
           <div class="login-rig">
                <img src="/static/home/imgs/bktou.png" alt="">
           </div>

       </div>
    </div>
</div>

<script type="text/javascript" src="https://webapi.amap.com/maps?v=1.4.14&key=729ac4d779c7e625bc11bd5ba3ff3112"></script>
<script type="text/javascript" src="https://cache.amap.com/lbs/static/addToolbar.js"></script> 
 <script src="/static/home/js/swiper.min.js"></script>   
            <script src="/static/home/js/lunbo.js"></script>
            <script src="/static/home/js/animateBak.js"></script>
            <script src="/static/home/js/jquery.min.js"></script>
            <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>  
             <script type="text/javascript">
    var swiper = new Swiper('.swiper-container', {
        loop: true, // 循环模式选项
        speed:300, 
        autoplay : { delay:3000 },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
        // 预售证咨询
        $('.queren5').on('click',function(){
            var id=$(this).attr('data-v');
            var phone=$('#ytel').val();
            var name=$('#yname').val();
            var pattern_phone = /^1[3-9][0-9]{9}$/;
				if (phone == '') {
					$('#ytel').attr('placeholder','手机号码不能为空');
					return;
				} else if (!pattern_phone.test(phone)) {
                    $('#ytel').val('');
					$('#ytel').attr('placeholder','手机号码不合法');
					return;
				} else {
					$('#ytel').attr('placeholder','');
				}
            $.post(
                "<?php echo url('home/index/port1'); ?>",
                {'bid':id,'name':name,'phone':phone},
                function(res){
                    if(res.code==200){
                        $('.mo-ti').show();
                        $('.mo-baojias').hide();
                    }
                }
            )
        })

        
        $('.queren2').click(function(){
                $('.mo-ti').css({
                       display:'none'
                })
        })
    //预售证详情
    $('.yushou').click(function(){
                $('.mo-baojias').css({
                    display:'block'
                })
                
        })
      $('.close').click(function(){
            $('.mo-baojia').css({
                   display:'none'
             })
             $('.mo-baojias').hide();
      })
        //登录
        $('.denglu').click(function(){
                   $('.login').css({
                          display:'block'
                   })
            })
            $('.login-close').click(function(){
                $('.login').css({
                          display:'none'
                   })
            })
            $('.ma').on('click',function(){
                
                var phone=$('.telphone').val();
                var pattern_phone = /^1[3-9][0-9]{9}$/;
				if (phone == '') {
					$('.telphone').attr('placeholder','手机号码不能为空');
					return;
				} else if (!pattern_phone.test(phone)) {
                    $('.telphone').val('');
					$('.telphone').attr('placeholder','手机号码不合法');
					return;
				} else {
					$('.telphone').attr('placeholder','');
				}
                var time=60;
                var fn = function () {
					time--;
					if (time > 0) {
						$('.ma').html('再发送' + time + 's');
                        $('.ma').attr('disabled', true);
					} else {
						clearInterval(interval);
						$('.ma').html('获取验证码');
						$('.ma').attr('disabled', false);
                    }
                    console.log(time);
				};
				fn();
                var interval = setInterval(fn, 1000);
                var data={'phone':phone};
                $.post(
                    "<?php echo url('home/index/login'); ?>",
                    data,
                    function(res){
                        if(res.code==100){
                           
                        }else{
                            alert(res.msg);
                        }
                    },
                    'json'
                )
            })
            $('.deng').on('click',function(){
                var tel=$('.telphone').val();
                var ma=$('.yan').val();
                console.log(ma);
                $.post(
                    "<?php echo url('home/index/log'); ?>",
                    {'phone':tel,'code':ma},
                    function(res){
                        if(res.code==200){
                            $('.mo-ti').show();
                        }
                    }
                )
            })



             $('#menu li').click(function(){
				    console.log(this);
				    $(this).addClass('active');
				    $(this).siblings().removeClass('active');
				    
				    $('.panel').siblings().removeClass('active');
    			    console.log($(this).index());
 				    $('.panel').eq($(this).index()).addClass('active');
				    
			})

    //满意度评论
            $('.manyi-btn').click(function(){
                   $('.mo').css({
                          display:'block'
                   })
            })
            $('.close-ping').click(function(){
                   $('.mo').css({
                          display:'none'
                   })
            })
            //点星星评价
            var score=0;
			var star=document.querySelector('.comment-star');
			star.className+='star'+score;
			star.onclick=function(evt){
			  console.log(Math.ceil(evt.offsetX/45));
              var huan=Math.ceil(evt.offsetX/45);
              $('.star-commit').attr('data-h',huan);
				  star.className='comment-star star'+Math.ceil(evt.offsetX/45);
			}

            var score1=0;
			var star1=document.querySelector('.comment-star1');
			star1.className+='star'+score1;
			star1.onclick=function(evt){
              var jiao=Math.ceil(evt.offsetX/45);
              $('.star-commit').attr('data-j',jiao)
				  star1.className='comment-star1 star'+jiao;
			}

            var score2=0;
			var star2=document.querySelector('.comment-star2');
			star2.className+='star'+score2;
			star2.onclick=function(evt){
			  console.log(Math.ceil(evt.offsetX/45));
              var zhou=Math.ceil(evt.offsetX/45);
              $('.star-commit').attr('data-z',zhou)
				  star2.className='comment-star2 star'+Math.ceil(evt.offsetX/45);
			}
            
            var score3=0;
			var star3=document.querySelector('.comment-star3');
			star3.className+='star'+score3;
			star3.onclick=function(evt){
			  console.log(Math.ceil(evt.offsetX/45));
              var shang=Math.ceil(evt.offsetX/45);
              $('.star-commit').attr('data-s',shang);
				  star3.className='comment-star3 star'+Math.ceil(evt.offsetX/45);
			}
            $('.star-commit').on('click',function(){
                var id=$(this).attr('data-v');
                var huan=$(this).attr('data-h');
                var jiao=$(this).attr('data-j');
                var zhou=$(this).attr('data-z');
                var shang=$(this).attr('data-s');
                $.post(
                    "<?php echo url('home/index/man'); ?>",
                    {"huan":huan,"jiao":jiao,"zhou":zhou,"shang":shang,"bid":id},
                    function(res){
                        if(res.code==200){
                            $('.mo').hide();
                        }
                    }
                )
            })
            

        //头部点击
        $('.header-select a').click(function(){
                    $(this).addClass('activehead')
                    $(this).siblings().removeClass('activehead')
                })

            // 输入手机号获取楼盘详情
            $('#getmore').on('click',function(){
                var id=$(this).attr('data-v');
                var phone=$(this).prev().val();
                var pattern_phone = /^1[3-9][0-9]{9}$/;
                if (phone == '') {
					$(this).prev().attr('placeholder','手机号码不能为空');
					return;
				} else if (!pattern_phone.test(phone)) {
                    $(this).prev().val('');
					$(this).prev().attr('placeholder','手机号码不合法');
					return;
				} else {
					$(this).prev().attr('placeholder','');
				}
                var that=$(this);
                $.post(
                    "<?php echo url('home/index/tel'); ?>",
                    {'phone':phone,'bid':id},
                    function(res){
                        if(res.code==200){
                            that.prev().val('');
                            that.prev().attr('placeholder','请输入手机号');
                            $('.mo-ti').css({
                                display:'block'
                            })
                        }
                    }
                )
            })
            // 咨询置业顾问
            $('.queren3').on('click',function(){
                var phone=$('#ztel').val();
                var zname=$('#zname').val();
                var id=$(this).attr('data-v');
                var pattern_phone = /^1[3-9][0-9]{9}$/;
                if (phone == '') {
					$('#ztel').attr('placeholder','手机号码不能为空');
					return;
				} else if (!pattern_phone.test(phone)) {
                    $('#ztel').val('');
					$('#ztel').attr('placeholder','手机号码不合法');
					return;
				} else {
					$('#ztel').attr('placeholder','');
				}
                $.post(
                    "<?php echo url('home/index/zhi'); ?>",
                    {'phone':phone,'name':zname,'bid':id},
                    function(res){
                        if(res.code==200){
                            $('.mo-success').hide();
                            $('.mo-ti').css({
                                display:'block'
                            })
                        }
                    }
                )
            })
			
            //客户满意度
            $('.manyi-list .zhu .wai .nei').eq(0).css({
                  width:'<?php echo $huan*600; ?>px'
            })
            $('.manyi-list .zhu .wai .nei').eq(1).css({
                  width:'<?php echo $jiao*600; ?>px'
            })
            $('.manyi-list .zhu .wai .nei').eq(2).css({
                  width:'<?php echo $zhou*600; ?>px'
            })
            $('.manyi-list .zhu .wai .nei').eq(3).css({
                  width:'<?php echo $shang*600; ?>px'
            })
            //点赞
            $('big-talk .rig-icon').on('click',function(){
                  $(this).children('span').css({
                        color:'rgba(51,51,51,1)',
                  })
                  $(this).children('i').css({
                        color:'rgba(51,51,51,1)',
                  })
            })


            //加载更多楼盘相册
            $('.more-pic').click(function(){
                   window.location.href="<?php echo url('home/index/photo',['id'=>$data['id']]); ?>"
            })

            //向他咨询
            $('.zi-btn').click(function(){
                   $('.mo-success').css({
                          display:'block'
                   })
            })
            $('.guan').click(function(){
                   $('.mo-success').css({
                          display:'none'
                   })
            })
            //了解房源报价
            $('.close').click(function(){
                   $('.mo-baojia').css({
                          display:'none'
                   })
            })
            $('.liaojie').click(function(){
                var con=$(this).attr('data-v');
                var mian=$(this).attr('data-j');
                var html=`${con}   建面${mian}m²`;
                $('.mo-baojia .baojia-content h3').html(html);
                $('.queren').attr('data-v',<?php echo $data['id']; ?>);
                   $('.mo-baojia').css({
                          display:'block'
                   })
            })
            $('.queren').on('click',function(){
                var name=$('#h_name').val();
                var phone=$('#h_tel').val();
                var id=$(this).attr('data-v');
                var con=$(this).parent().parent().find('h3').html();
                var pattern_phone = /^1[3-9][0-9]{9}$/;
                if (phone == '') {
					$('#h_tel').attr('placeholder','手机号码不能为空');
					return;
				} else if (!pattern_phone.test(phone)) {
                    $('#h_tel').val('');
					$('#h_tel').attr('placeholder','手机号码不合法');
					return;
				} else {
					$('#h_tel').attr('placeholder','');
				}
                $.post(
                    "<?php echo url('home/index/hmsg'); ?>",
                    {'bid':id,'name':name,'tel':phone,'con':con},
                    function(res){
                        if(res.code==200){
                            $('.mo-ti').show();
                            $('.mo-baojia').hide();
                        }
                    }
                )
            })

            // 主力户型查看更多
            $('.geng-duo').on('click',function(){
                var h=$('.hu-list').height();
                $('.h-box').height(h);
                $('.h-box').css('margin-bottom','26px')
                h=h+70;
                $('#panel .active').height(h);
                h=h+210;
                $('.main-hu').height(h);
            })

            //地图
            var map = new AMap.Map("container", {
        resizeEnable: true,
        zoom:15
    });
    function addMarker() {
        marker = new AMap.Marker({
            icon: "https://a.amap.com/jsapi_demos/static/demo-center/icons/poi-marker-default.png",
            position: [<?php echo $data['mapx']; ?>,<?php echo $data['mapy']; ?>],
            offset: new AMap.Pixel(-13, -30)
        });
        marker.setMap(map);
    }
    addMarker();
    AMap.service(["AMap.PlaceSearch"], function() {
        //构造地点查询类
        var placeSearch = new AMap.PlaceSearch({ 
            pageSize: 10, // 单页显示结果条数
            pageIndex: 1, // 页码
            city: "", // 兴趣点城市
            citylimit: true,  //是否强制限制在设置的城市内搜索
            map: map, // 展现结果的地图实例
            panel: "panel1", // 结果列表将在此容器中进行展示。
            autoFitView: true // 是否自动调整地图视野使绘制的 Marker点都处于视口的可见范围
        });
        
        var cpoint = [<?php echo $data['mapx']; ?>,<?php echo $data['mapy']; ?>]; //中心点坐标
        var p2=[<?php echo $data['mapx']; ?>,<?php echo $data['mapy']; ?>];
        var s=AMap.GeometryUtil.distance(cpoint, p2);
        console.log(s);
        placeSearch.searchNearBy('公交', cpoint, 2000, function(status, result) {
            console.log(result);
        });
        $(document).ready(function(){
        $('#list ul li').on('click',function(){
            $(this).addClass('activemap');
		   $(this).siblings().removeClass('activemap');
        
        console.log( $(this).attr('id'));
            if($(this).attr('id')==2){
                $(".bus").css("display","block");
                $('#panel1').css('top',99)
            }else{
                $(".bus").css("display","none");
                $('#panel1').css('top',50)
                placeSearch.searchNearBy($(this).html(), cpoint, 2000, function(status, result) {
        });
            }
            

        });

        $('.bus ul li').on('click',function(){
            console.log(1);
            $(this).addClass('dian');
		   $(this).siblings().removeClass('dian');
           placeSearch.searchNearBy($(this).html(), cpoint, 2000, function(status, result) {
             });
        })
    })
    });



      //图片放大功能
      $(".img").on('click',function(){  
            console.log( $(".img"));
        var _this = $(this);//将当前的img元素作为_this传入函数  
        imgShow("#outerdiv", "#innerdiv", "#bigimg", _this);  
    }); 
    function imgShow(outerdiv, innerdiv, bigimg, _this){  
        var src = _this.attr("src");//获取当前点击的pimg元素中的src属性  
        $(bigimg).attr("src", src);//设置#bigimg元素的src属性  
            /*获取当前点击图片的真实大小，并显示弹出层及大图*/  
        $("<img/>").attr("src", src).load(function(){  
            var windowW = $(window).width();//获取当前窗口宽度  
            var windowH = $(window).height();//获取当前窗口高度  
            var realWidth = this.width;//获取图片真实宽度  
            var realHeight = this.height;//获取图片真实高度  
            var imgWidth, imgHeight;  
            var scale = 0.8;//缩放尺寸，当图片真实宽度和高度大于窗口宽度和高度时进行缩放  
              
            if(realHeight>windowH*scale) {
                imgHeight = windowH*scale;
                imgWidth = imgHeight/realHeight*realWidth;
                if(imgWidth>windowW*scale) {
                    imgWidth = windowW*scale;
                }  
            } else if(realWidth>windowW*scale) {  
                imgWidth = windowW*scale;
                            imgHeight = imgWidth/realWidth*realHeight;  
            } else {
                imgWidth = realWidth;  
                imgHeight = realHeight;  
            }  
                    $(bigimg).css("width",imgWidth);
              
            var w = (windowW-imgWidth)/2; 
            var h = (windowH-imgHeight)/2;
            $(innerdiv).css({"top":h, "left":w});
            $(outerdiv).fadeIn("fast");
        });  
        $(outerdiv).click(function(){
            $(this).fadeOut("fast");  
        });  
    }  

    //登录
    $('.denglu').click(function(){
        console.log(1);
                   $('.login').css('display','block')
            })
            $('.login-close').click(function(){
                $('.login').css({
                          display:'none'
                   })
            })
    // 点赞
    var l=1;
    $('.iconlike').on('click',function(){
        var num=$(this).attr('data-v');
        num=parseInt(num);
        var id=$(this).attr('data-id');
        var that=$(this);
        if(l){
            num=num+1;
            $.post(
                "<?php echo url('home/index/num'); ?>",
                {"id":id,'num':num},
                function(res){
                    if(res.code==200){
                        l=0;
                        that.next().html(num);
                        that.attr('data-v',num);
                    }
                }
            )
        }else{
            num=num-1;
            $.post(
                "<?php echo url('home/index/num'); ?>",
                {'id':id,'num':num},
                function(res){
                    if(res.code==200){
                        l=1;
                        that.next().html(num);
                        that.attr('data-v',num);
                    }
                }
            )
        }
    })

    // 底部手机号查询
    $('.tel_ti').on('click',function(){
        var phone=$(this).prev().val();
        var id=$(this).attr('data-v');
        var pattern_phone = /^1[3-9][0-9]{9}$/;
		if (phone == '') {
			$(this).prev().attr('placeholder','手机号码不能为空');
			return;
		} else if (!pattern_phone.test(phone)) {
            $(this).prev().val('');
			$(this).prev().attr('placeholder','手机号码不合法');
			return;
		} else {
			$(this).prev().attr('placeholder','');
        }
        var that=$(this);
        $.post(
            "<?php echo url('home/index/tel'); ?>",
            {'phone':phone,'bid':id},
            function(res){
                if(res.code==200){
                    that.prev().val('');
                    that.prev().attr('placeholder','输入您的手机查询详细楼盘资料');
                    $('.mo-ti').css({
                        display:'block'
                    })
                }
            }
        )
    })

    
             </script>
</body>
</html>