<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"D:\phpstudy_pro\WWW\tp3\public/../application/home\view\mine\intro.html";i:1566887000;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <link rel="stylesheet" href="/static/home/csss/common/common.css">
    <link rel="stylesheet" href="/static/home/csss/detail.css">
    <!-- <link rel="stylesheet" href="http://at.alicdn.com/t/font_1350331_95tz9eyhqij.css">
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_1329849_7za7eo8yzvj.css">
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_1350331_famwivdhge.css"> -->
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_1365746_cey76jm1qyb.css">
    <link rel="stylesheet" href="/static/home/csss/common/animate.min.css">
    <link rel="stylesheet" href="/static/home/csss/common/swiper.min.css">
    <link rel="stylesheet" href="https://cache.amap.com/lbs/static/main1119.css"/>
    <link rel="stylesheet" href="/static/home/csss/common/successmo.css">
    <link rel="stylesheet" href="/static/home/csss/common/footer.css">
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_1350331_tr69ulhj2bk.css"> 
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_1320044_b4kleb2ox6b.css">
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_1367531_3t0litim5l6.css">
    <!-- <link rel="stylesheet" href="http://at.alicdn.com/t/font_910507_hzufm6hpwxd.css"> -->
    <title>楼盘详情</title>
    <script type="text/javascript" src="https://webapi.amap.com/maps?v=1.4.14&key=729ac4d779c7e625bc11bd5ba3ff3112"></script>
    <script type="text/javascript" src="https://cache.amap.com/lbs/static/addToolbar.js"></script>
    <script type="text/javascript">
        var bw = (document.documentElement.clientWidth/7.5)+"px";
        var htmlTag = document.getElementsByTagName("html")[0]; 
        htmlTag.style.fontSize=bw; 
    </script>
     <style type="text/css">
        /* box-sizing: border-box;  */
            #swper1 {
                width: 100%;
                height:4.2rem;
            } 
            #container {
              width:6.90rem;
            height:3.6rem;
            }

            html, body {
        position: relative;
        height: 100%;
    }
    body {
        background: #eee;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color:#000;
        margin: 0;
        padding: 0;
    }
    .swiper-container {
        width: 100%;
        height: 100%;
    }
    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        
        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
    .lunlun{
        margin-left:20px;
    }
        </style>
</head>
<body>
      <!--头部-->
  <div class="title bg">
        <h1><img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1565777367881&di=09f60c95761a4d993622fb57ccfb91fa&imgtype=0&src=http%3A%2F%2Fb-ssl.duitang.com%2Fuploads%2Fblog%2F201510%2F29%2F20151029140701_LXET5.jpeg" alt=""></h1>
        <span class="iconfont iconcaidan" id="list"></span>
</div>

<header class="bg">
          <ul>
                <li> <a href="<?php echo url('home/mine/index',['id'=>$data['id']]); ?>" >首页</a></li>
                <li class="active"> <a href="<?php echo url('home/mine/intro',['id'=>$data['id']]); ?>" >项目介绍</a></li>
                <li>  <a href="<?php echo url('home/mine/dong',['id'=>$data['id']]); ?>">楼盘动态</a></li>
                <li> <a href="<?php echo url('home/mine/potos',['id'=>$data['id']]); ?>">楼盘图册</a></li>
                <li><a href="<?php echo url('home/mine/lian',['id'=>$data['id']]); ?>">联系我们</a></li>
          </ul>
</header>
 <!--轮播-->
 <div class="lunbo2">
      <div class="swiper-container lun1" id="swper1">
          <div class="swiper-wrapper">
              <div class="swiper-slide"><img src="/static/home/img/main.jpg" alt=""></div>
              <div class="swiper-slide"><img src="/static/home/img/building2.jpg" alt=""></div>
              <div class="swiper-slide"><img src="/static/home/img/building1.jpg" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
      </div>
</div>

 <!--楼盘信息-->
<div class="lou-text">
    <ul>
      <li><?php echo $data['building_name']; ?></li>
      <li><span>单&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;价：</span><?php echo $data['danjia']; ?>/m²  </li>
      <li><span>地&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;址：</span><?php echo $data['building_address']; ?></li>
      <li><span>楼盘类型：</span><?php echo $data['building_xingshi']; ?></li>
      <li><span>主力户型：</span><?php echo $data['humianji']; ?>m²</li>
      <li><span>开盘时间：</span><?php echo $data['kaitime']; ?></li>
      <li><span>最新预售许可证：</span><?php echo $data['yushou']; ?></li>
    </ul>
    <input type="button" value="预售证详情" class="yuzheng">
</div>
<!--项目优势-->
<div class="youshi">
    <h1>项目优势</h1>
     <ul>
       <li>1.<?php echo $data['you_one']; ?></li>
       <li>2.<?php echo $data['you_two']; ?></li>
       <li>3.<?php echo $data['you_thre']; ?></li>
     </ul>
</div>
<!--广告-->
<div class="adv">
  <h1>400-8888-777 转 7788</h1>
  <a href="tel:400-817-7788">
        <img src="/static/home/img/tel.png" alt="">
  </a>
  
</div>
<!--主力户型-->
<div class="main">
   <div class="main-title">
       <h1>主力户型</h1>
       <span id="hmore">更多户型<a href="javascript:;" class="iconfont iconjiantou"></a></span>
   </div>
   <ul class="bigbox">
       <?php foreach($himgs as $v): ?>
            <li class="list" data-v="<?php echo $v['id']; ?>">
                <img src="/static/home/img/huxing.png" alt="">
                <ul class="smallbox">
                    <li><span><?php echo $v['content']; ?></span><a href="">在售</a><i><?php echo $v['jia']; ?><em>万起</em></i></li>
                    <li>特点：<?php echo $data['building_tese']; ?></li>
                    <li>类型：<?php echo $data['building_xingshi']; ?></li>
                    <li>户型分析：<?php echo $v['fen']; ?></li>
                </ul>
            </li>
      <?php endforeach; ?>
      
   </ul>

</div>
<!--置业经理-->
<div class="zhiye">
    <h1>置业经理</h1>
    <div class="people">
        <img src="/static/home/img/img.png" alt="">
        <div class="peo-name">
            <h3>倪丽丽</h3>
            <h4>咨询人数：<span>361</span></h4>
            <p>向她咨询更多户型信息</p>
        </div>
       <input type="button" value="向她咨询" id="showzibox">
    </div>
</div>
<!--楼盘详情-->
<div class="lou-detail">
    <div class="lou-title">
        <h1>楼盘详情</h1>
       <span class="l-more">基本信息<a href="javascript:;" class="iconfont iconjiantou"></a></span>
    </div>
    <div class="tel-input">
        <div class="top">
            <img src="/static/home/img/loudetail.png" alt="">
            <div class="rig-text">
               <h4>更多楼盘信息</h4>
               <p>不想错过重要楼盘详情，立即了解更多</p>
            </div>
        </div>
        <div class="bot">
            <input type="text" placeholder="请输入手机号"><span id="xbtn">了解更多</span>
        </div>
    </div>
</div>
<!--周边配套-->
<div class="near">
    <div class="lou-title">
        <h1>周边配套</h1>
       <span id="zpei">详细规划<a href="javascript:;" class="iconfont iconjiantou"></a></span>
    </div>
    <div class="main-map">
         <div id="container"></div>
    </div>
    <div class="map-type">
       <ul>
         <li><img src="/static/home/img/jiao.png" alt=""><span>交通</span></li>
         <li><img src="/static/home/img/jiaoyu.png" alt=""><span>教育</span></li>
         <li><img src="/static/home/img/yiliao.png" alt=""><span>医疗</span></li>
         <li><img src="/static/home/img/shopping.png" alt=""><span>购物</span></li>
         <li><img src="/static/home/img/life.png" alt=""><span>生活</span></li>
         <li><img src="/static/home/img/yu.png" alt=""><span>娱乐</span></li>
       </ul> 
    </div>
</div>
<!--楼盘图册-->
<div class="louPic">
    <div class="lou-title">
      <h1>楼盘图册</h1>
    <span id="pmore">更多图册<a href="javascript:;" class="iconfont iconjiantou"></a></span>
   </div>
   <div  class="lun">
        <div class="swiper-container lun2">
          <div class="swiper-wrapper lunlun">
              <?php foreach($ximgs as $v): ?>
              <div class="swiper-slide"><img src="<?php echo $v['x_big']; ?>" alt=""></div>
              <?php endforeach; foreach($pimgs as $v): ?>
              <div class="swiper-slide"><img src="<?php echo $v['p_big']; ?>" alt=""></div>
              <?php endforeach; ?>
              
          </div>
          <!-- Add Pagination -->
          <div class="swiper-pagination"></div>
       </div>
    
      </div>
  
   </div>
</div>
<!--客户满意度-->
<div id="manyi">
   <h1>客户满意度</h1>
   <div class="jindu">
       <ul>
         <li><span>&nbsp;&nbsp;环境:<?php echo $huan*100; ?>%满意度</span>
          </li>
         <li><span>&nbsp;&nbsp;交通:<?php echo $jiao*100; ?>%满意度</span></li>
         <li><span>&nbsp;&nbsp;周边:<?php echo $zhou*100; ?>%满意度</span></li>
         <li><span>&nbsp;&nbsp;商业:<?php echo $shang*100; ?>%满意度</span></li>
       </ul>
       <input type="button" value="用户评价" class="staropen">
   </div>
</div>
<!--footer-->
<div class="footer pos">
  <ul>
        <li> <a href="<?php echo url('home/mine/index',['id'=>$data['id']]); ?>" >首页</a></li>
        <li> <a href="<?php echo url('home/mine/intro',['id'=>$data['id']]); ?>" >项目介绍</a></li>
        <li>  <a href="<?php echo url('home/mine/dong',['id'=>$data['id']]); ?>">楼盘动态</a></li>
        <li> <a href="<?php echo url('home/mine/potos',['id'=>$data['id']]); ?>">楼盘图册</a></li>
        <li ><a href="<?php echo url('home/mine/lian',['id'=>$data['id']]); ?>">联系我们</a></li>
  </ul>
  <p>Copyright © 2017 - 2022 yidefang.com 浙ICP备18057005号</p>
</div>


 <!--底部-->
 <div class="dibu">
        <a href="tel:400-718-7788">
    <div class="shoutel">
        
                <span class="iconfont icondianhua"></span>
                <i>售楼电话</i>
        
         
    </div>
</a>
    <div class="yuyue yu-fang">
        <span class="iconfont iconnaozhong"></span>
        <i >预约看房</i>
    </div>
</div>

<!--我要评价模态框 -->
<div class="mo">
        <div class="ping-kuang">
            <div class="title2">
               <p>我要评价</p>
                <span class="iconfont icon-guanbi"></span>
            </div>
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
             
                    </div> 
                    <input type="button" value="发表" data-v="<?php echo $data['id']; ?>" class="star-commit close-ping "/>
            </div>
        </div>
</div>
<!--了解房源报价模态框-->
<div class="about">
    <div class="faokbox">
         <div class="ping-ok-tit">
                 <p>了解预售证详情</p>
                 <img src="/static/home/img/del.png" alt="" id="close-pok">
         </div>
         <div class="pingresmo">
             <h3><?php echo $data['building_name']; ?></h3>
             <p>向售楼处了解详细预售许可证详情</p>
             <form action="">
                 <div class="inputbox  baojiatel">
                        <input type="text" placeholder="请输入手机号" id="ltel">
                 </div>
                 <div class="inputbox baojianame">
                        <input type="text" placeholder="请输入姓名" id="lname">
                 </div>
                    <input type="button" value="确定" class="sub" data-v="<?php echo $data['id']; ?>">
             </form>
         </div>
 </div>
</div>
<!--发表评价成功模态框-->
<div class="faping-ok">
        <div class="faokbox">
             <div class="ping-ok-tit">
                     <img src="/static/home/img/del.png" alt="" id="close-pok">
             </div>
             <div class="pingres">
                 <img src="/static/home/img/ok.png" alt="">
                 <h4>提交成功</h4>
                 <input type="button" value="确定" id="tbtn">
             </div>
     </div>
            
</div>
    <!--预约看房-->
    <div class="yufang fang">
        <div class="yubox">
             <div class="yu-fang-ok">
                     <p>预约看房</p>
                     <img src="/static/home/img/del.png" alt="" id="close-yu">
             </div>
             <div class="yures">
                 <h3><?php echo $data['building_name']; ?></h3>
                 <p>一键预约看房免费小车上门接送</p>
                 <form action="">
                     <div class="inputbox one">
                            <input type="text" placeholder="请输入手机号" id="ytel">
                     </div>
                     <div class="inputbox two">
                            <input type="text" placeholder="请输入姓名" id="yname">
                     </div>
                        <input type="button" value="确定" class="yusub btn1" data-v="<?php echo $data['id']; ?>">
                 </form>
             </div>
     </div>
    </div>

    
    <!--我要咨询-->
    <div class="yufang zixunbox">
            <div class="yubox">
                 <div class="yu-fang-ok">
                         <p>我要咨询</p>
                         <img src="/static/home/img/del.png" alt="" class="zi-close">
                 </div>
                 <div class="yures">
                     <h3>世茂泰禾·中央广场</h3>
                     <p>向她咨询更多户型信息</p>
                     <form action="">
                         <div class="inputbox myzitel">
                                <input type="text" placeholder="请输入手机号" id=ztel>
                         </div>
                         <div class="inputbox myziname">
                                <input type="text" placeholder="请输入姓名" id="zname">
                         </div>
                            <input type="button" value="确定" class="yusub btn2" data-v="<?php echo $data['id']; ?>">
                     </form>
                 </div>
         </div>
        </div>


<script src="/static/home/jss/swiper.min.js"></script>
<script src="/static/home/jss/jquery.min.js"></script>
<script src="/static/home/jss/swiper.animate.min.js"></script>
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
<script type="text/javascript">
//轮播图
$(document).ready(function () {

    var mySwiper1 = new Swiper ('#swper1', {
    autoplay: true,
    direction: 'horizontal', // 垂直切换选项
    loop: true, // 循环模式选项
    
    // 如果需要分页器
    pagination: {
      el: '.swiper-pagination',
    },
    
    // 如果需要前进后退按钮
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    
    // 如果需要滚动条
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  })
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

//第二个swiper
var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        slidesPerView: 3,
        paginationClickable: true,
        spaceBetween: 30
    });

    $('header ul li').click(function(){
      console.log($(this));
            $(this).addClass('active');
            $(this).siblings().removeClass('active');
  })

//   楼盘详情提交
  $('#xbtn').on('click',function(){
      var tel=$(this).prev().val();
      var id=<?php echo $data['id']; ?>;
      var pattern_phone = /^1[3-9][0-9]{9}$/;
                if (tel == '') {
					$(this).prev().attr('placeholder','手机号码不能为空');
					return;
				} else if (!pattern_phone.test(tel)) {
                    $(this).prev().val('');
					$(this).prev().attr('placeholder','手机号码不合法');
					return;
				} else {
					$(this).prev().attr('placeholder','');
				}
                var that=$(this);
                $.post(
                    "<?php echo url('home/index/tel'); ?>",
                    {'phone':tel,'bid':id},
                    function(res){
                        if(res.code==200){
                            that.prev().val('');
                            that.prev().attr('placeholder','请输入手机号');
                            $('.faping-ok').css({
                                display:'block'
                            })
                        }
                    }
                )
  })

//   户型跳转
$('.list').on('click',function(){
    var id=$(this).attr('data-v');
    window.location.href=`/m/hufen/${id}`;
})

// 楼盘相册跳转
$('#pmore').on('click',function(){
    window.location.href="<?php echo url('home/mine/potos',['id'=>$data['id']]); ?>";
})

  //楼盘详情跳转
  $('.l-more').on('click',function(){
      window.location.href="<?php echo url('home/mine/detail',['id'=>$data['id']]); ?>";
  })

  //    预约看房
  $('.yusub').on('click',function(){
      var tel=$('#ytel').val();
      var id=$(this).attr('data-v');
      var name=$('#yname').val();
      if(tel==''){
         $('#ytel').val('');
         $('#ytel').attr('placeholder','手机号码不能为空');
         return false;
      }else if(!(/^1[3|4|5|8][0-9]\d{4,8}$/.test(value))){
         $('#ytel').val('');
         $('#ytel').attr('placeholder','手机号码格式错误，请重新输入');
         return false;
      }
      $.post(
          "<?php echo url('home/index/zhi'); ?>",
          {'phone':tel,'bid':id,'name':name},
          function(res){
              if(res.code==200){
                  $('.faping-ok').show();
                  $('.yufang').hide();
              }
          }
      )
  })

//   周边配套跳转
$('#zpei').on('click',function(){
    window.location.href="<?php echo url('home/mine/zhou',['id'=>$data['id']]); ?>";
})

//   了解房源报价
  $('.sub').on('click',function(){
      var tel=$('#ltel').val();
      var name=$('#lname').val();
      var id=$(this).attr('data-v');
    if(!(/^1[3|4|5|8][0-9]\d{4,8}$/.test(tel))){
            $('#ltel').val('');
            $('#ltel').attr('placeholder','手机号码格式错误，请重新输入');
            return false;
     }else if(tel==''){
        $('#ltel').attr('placeholder','手机号码格不能为空');
            return false;
    }
    $.post(
        "<?php echo url('home/index/port1'); ?>",
        {'phone':tel,'name':name,'bid':id},
        function(res){
            if(res.code==200){
                $('.about').hide();
                $('.faping-ok').show();
            }
        }
    )
  })


 //满意度评论
            $('.staropen').click(function(){
                   $('.mo').css({
                          display:'block'
                   })
            })
            $('.icon-guanbi').click(function(){
                   $('.mo').css({
                          display:'none'
                   })
            })
            //点星星评价
            var score=0;
			var star=document.querySelector('.comment-star');
			star.className+='star'+score;
			star.onclick=function(evt){

                  $('.star-commit').attr('data-h',Math.ceil(evt.offsetX/45));
				  star.className='comment-star star'+Math.ceil(evt.offsetX/45);
			}

            var score1=0;
			var star1=document.querySelector('.comment-star1');
			star1.className+='star'+score1;
			star1.onclick=function(evt){
              var number=Math.ceil(evt.offsetX/45);
              $('.star-commit').attr('data-j',Math.ceil(evt.offsetX/45));
				  star1.className='comment-star1 star'+number;
			}

            var score2=0;
			var star2=document.querySelector('.comment-star2');
			star2.className+='star'+score2;
			star2.onclick=function(evt){
              $('.star-commit').attr('data-z',Math.ceil(evt.offsetX/45));
				  star2.className='comment-star2 star'+Math.ceil(evt.offsetX/45);
			}
            
            var score3=0;
			var star3=document.querySelector('.comment-star3');
			star3.className+='star'+score3;
			star3.onclick=function(evt){
              $('.star-commit').attr('data-s',Math.ceil(evt.offsetX/45));
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
        //预售证详情的显示与隐藏
        $(".yuzheng").click(function(){
                $('.about').css({
                        display:'block'
                })
        })
        $('#close-pok').click(function(){
            $('.about').css({
                        display:'none'
                })
        })
       //预约看房
     $('.yu-fang').click(function(){
            $('.fang').css({
                  display:'block'
            })
     })
    $('#close-yu').click(function(){
        $('.fang').css({
                  display:'none'
            })
    })
    //预约看房获取手机号和姓名
    $('.one').children().change(function(){
        console.log($(this).val());
        var value=$(this).val();
        if(!(/^1[3|4|5|8][0-9]\d{4,8}$/.test(value))){
            console.log( $('.one').children().attr('placeholder'));
            $('.one').children().val('');
            $('.one').children().attr('placeholder','手机号码格式错误，请重新输入');
            return false;
     }
    })
    console.log($('.one').parent().parent().find('h3').text());
    console.log($('.one').parent().parent().prev().find('p').text());
    $('.two').children().change(function(){
        console.log($(this).val());
}) 

// 主力户型跳转
$('#hmore').on('click',function(){
    window.location.href="<?php echo url('home/mine/hu',['id'=>$data['id']]); ?>";
})

// 客户满意度
$('.jindu ul li').eq(0).find('span').css({
    width:"<?php echo $huan*6.9; ?>rem"
})
console.log('huan'+<?php echo $huan*6.9; ?>);
$('.jindu ul li').eq(1).find('span').css({
    width:"<?php echo $jiao*6.9; ?>rem"
})
console.log('jiao'+<?php echo $jiao*6.9; ?>);
$('.jindu ul li').eq(2).find('span').css({
    width:"<?php echo $zhou*6.9; ?>rem"
})
$('.jindu ul li').eq(3).find('span').css({
    width:"<?php echo $shang*6.9; ?>rem"
})
    
    // 周边配套
    $('.map-type').on('click',function(){
        window.location.href="<?php echo url('home/mine/zhou',['id'=>$data['id']]); ?>";
    })


 //我要咨询获取手机号和姓名
$('#showzibox').click(function(){
        $('.zixunbox').css({
             display:'block'
        })
})
$('.zi-close').click(function(){
    $('.zixunbox').css({
             display:'none'
        })
})

        // 咨询置业顾问
        $('.btn2').on('click',function(){
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
                            $('.zixunbox').hide();
                            $('.faping-ok').css({
                                display:'block'
                            })
                        }
                    }
                )
            })
            $('#tbtn').on('click',function(){
                $('.faping-ok').hide();
            })

    $('.myzitel').children().change(function(){
        var value=$(this).val();
        if(!(/^1[3|4|5|8][0-9]\d{4,8}$/.test(value))){
            // console.log( $('.myzitel').children().attr('placeholder'));
            $('.myzitel').children().val('');
            $('.myzitel').children().attr('placeholder','手机号码格式错误，请重新输入');
            return false;
        }
    })
    

  //菜单显示隐藏
window.isshow=1;
$('#list').click(function(){
      
      if( window.isshow==1){
        $('header').slideUp("fast");
        window.isshow=2;
        $('.lunbo2').css({
             marginTop:'0.8rem'
        })
        // console.log( window.isshow)
      }else if( window.isshow==2){
        // console.log( window.isshow)
        $('header').slideDown("fast");
        window.isshow=1;
        $('.lunbo2').css({
             marginTop:'1.6rem'
        })
      }
  })   
  </script>

</body>
</html>