<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"D:\phpstudy_pro\WWW\tp3\public/../application/home\view\mine\index.html";i:1566980632;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <link rel="stylesheet" href="/static/home/csss/common/common.css">
    <link rel="stylesheet" href="/static/home/csss/common/swiper.min.css">
    <link rel="stylesheet" href="/static/home/csss/index.css">
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_1350331_95tz9eyhqij.css">
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_1329849_7za7eo8yzvj.css">
    <link rel="stylesheet" href="/static/home/csss/common/footer.css">
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_1367531_3t0litim5l6.css">
    <title>易得房</title>
    <script type="text/javascript">
        var bw = (document.documentElement.clientWidth/7.5)+"px";
        var htmlTag = document.getElementsByTagName("html")[0]; 
        htmlTag.style.fontSize=bw; 
    </script>
    <style>
    /* box-sizing: border-box;  */
        .swiper-container {
            width: 100%;
            height: 4.2rem;
        }  
    </style>
</head>
<body>
     <!--头部-->
    <div class="title">
            <h1><img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1565777367881&di=09f60c95761a4d993622fb57ccfb91fa&imgtype=0&src=http%3A%2F%2Fb-ssl.duitang.com%2Fuploads%2Fblog%2F201510%2F29%2F20151029140701_LXET5.jpeg" alt=""></h1>
            <span class="iconfont icon-caidan" id="list"></span>
    </div>

  <header>
      <ul>
          <li class="active"> <a href="<?php echo url('home/mine/index',['id'=>$data['id']]); ?>" >首页</a></li>
          <li> <a href="<?php echo url('home/mine/intro',['id'=>$data['id']]); ?>" >项目介绍</a></li>
          <li>  <a href="<?php echo url('home/mine/dong',['id'=>$data['id']]); ?>">楼盘动态</a></li>
          <li> <a href="<?php echo url('home/mine/potos',['id'=>$data['id']]); ?>">楼盘图册</a></li>
          <li ><a href="<?php echo url('home/mine/lian',['id'=>$data['id']]); ?>">联系我们</a></li>
    </ul>
  </header>
  <!--轮播-->
  <div class="lunbo">
        <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php foreach($zhu as $v): ?>
                    <div class="swiper-slide"><img src="<?php echo $v['img']; ?>" alt=""></div>
                    <?php endforeach; ?>
                    
                </div>
                <!-- 如果需要分页器 -->
                <div class="swiper-pagination"></div>
            </div>
  </div>
 <!--工具栏-->
 <section>
                <figure>
                    <img src="/static/home/img/icon1.png"/>
                    <figcaption><a href="#">臻品项目</a></figcaption>
                </figure>
                <figure>
                    <img src="/static/home/img/icon2.png"/>
                    <figcaption><a href="#">一对一服务</a></figcaption>
                </figure>
                <figure>
                    <img src="/static/home/img/icon3.png"/>
                    <figcaption><a href="#">持续生态圈</a></figcaption>
                </figure>
                <figure>
                    <img src="/static/home/img/icon4.png"/>
                    <figcaption><a href="#">品牌管理</a></figcaption>
                </figure>
</section>
<!--楼盘介绍-->
<div class="intro">
    <h1>走进<?php echo $data['building_name']; ?></h1>
    <img src="<?php echo $data['building_img']; ?>" alt="">
    <p>
            <?php echo $data['kone_intro']; ?> 
            <?php echo $data['ktwo_intro']; ?>
    </p>
</div>
<!--了解楼盘-->
<div class="liaojie">
    <h1>了解<?php echo $data['building_name']; ?></h1>
    <div class="liao-box">
        <div class="l-left">
                <h2>精品房源特色 </h2>
                <p><?php echo $data['fytese']; ?></p>
                <img src="/static/home/img/pic01.png" alt="">
        </div>
        <div class="l-rig">
            <div class="shang-pic">
                <h2>成熟商业体系 </h2>
                <p><?php echo $data['sytixi']; ?></p>
                <img src="/static/home/img/pic02.png" alt="">
            </div>
            <div class="wuye">
                    <h2>高端物业管理</h2>
                    <p><?php echo $data['wlguanli']; ?></p>
                    <img src="/static/home/img/pic03.png" alt="">
            </div>
        </div>
    </div>
</div>
<!--效果图-->
<div class="xiaoguo">
        <div class="title1">
                <h1>效果图</h1>
               <p id="xmore"><span>更多效果图 </span><span class="iconfont iconjiantou"></span></p>
        </div>
    <div class="imglist">
        <?php foreach($xiao as $v): ?>
            <img src="<?php echo $v['x_big']; ?>" alt="">
            <?php endforeach; ?>
    </div>
</div>
<!--用户评论-->
<div class="commit">
    <div class="title1">
        <h1>用户评论</h1>
       <p id="moreping" data-v="<?php echo $data['id']; ?>"><span>更多评论 </span><span class="iconfont iconjiantou"></span></p>
    </div>
     <ul class="pinglist">
         <?php foreach($pings as $v): ?>
         <li>
             <div class="user">
                 <img src="/static/home/img/img.png" alt="" class="touxiang">
                 <div class="tel-mid"> 
                     <span><?php echo $v['tel']; ?></span>
                     <p><?php echo $v['create_time']; ?></p>
                 </div>
                 <div class="zannum">
                    <img class="zanimg" src="/static/home/img/zan.png" alt=""  data-id="<?php echo $v['id']; ?>" data-v="<?php echo $v['num']; ?>">
                     <i><?php echo $v['num']; ?></i>
                 </div>
                  
             </div>
             <p>  <?php echo $v['content']; ?></p>
         </li>
         <?php endforeach; ?>
        
     </ul>
     <input type="button" value="写评论" class="btn subping">
</div>
<!--footer-->
<div class="footer"> 
    <ul>
        <li> <a href="<?php echo url('home/mine/index',['id'=>$data['id']]); ?>" >首页</a></li>
          <li> <a href="<?php echo url('home/mine/intro',['id'=>$data['id']]); ?>" >项目介绍</a></li>
          <li>  <a href="<?php echo url('home/mine/dong',['id'=>$data['id']]); ?>">楼盘动态</a></li>
          <li> <a href="<?php echo url('home/mine/potos',['id'=>$data['id']]); ?>">楼盘图册</a></li>
          <li ><a href="<?php echo url('home/mine/lian',['id'=>$data['id']]); ?>">联系我们</a></li>
    </ul>
    <p>Copyright © 2017 - 2022 yidefang.com 浙ICP备18057005号</p>
</div>
<!--发表评价模态框-->
<div class="faping">
      <div class="pingform">
                <div class="ping-tit">
                        <img src="/static/home/img/header-ping.png" alt="">
                        <img src="/static/home/img/title.png" alt="">
                        <img src="/static/home/img/del.png" alt="" id="close-fping">
                </div>
                <div class="pinginput">
                    <h4>我要评价</h4>
                    <form action="">
                        <textarea name="" id="pinglun" cols="30" rows="10" placeholder="在此处写下您的评价"></textarea>
                      
                    </form>
                </div>
                <input type="button" value="发表" id="fabiao" data-v="<?php echo $data['id']; ?>">
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
                      <h4>评论成功</h4>
                      <input type="button" value="确定" id="que_pok">
                  </div>
          </div>
                 
  </div>
  <!--预约看房模态框-->
  <div class="yufang fang">
    <div class="yubox">
         <div class="yu-fang-ok">
                 <p>预约看房</p>
                 <img src="/static/home/img/del.png" alt="" id="close-yu">
         </div>
         <div class="yures">
             <h3><?php echo $data['building_name']; ?></h3>
             <p>一键预约看房免费小车上门接送</p>
             <form action="" class="yuform">
                 <div class="inputbox one">
                        <input type="text" placeholder="请输入手机号" id="ytel">
                 </div>
                 <div class="inputbox two">
                        <input type="text" placeholder="请输入姓名" id="yname">
                 </div>
                    <input type="button" value="确定" class="yusub" data-v="<?php echo $data['id']; ?>">
             </form>
         </div>
 </div>
</div>
 <!--底部-->
 <div class="dibu">
     <a href="tel:400-816-7788">
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
<script src="/static/home/jss/swiper.min.js"></script>
<script src="/static/home/jss/jquery.min.js"></script>
<script src="/static/home/jss/yukan.js"></script>
<script type="text/javascript">
//轮播图
    var mySwiper = new Swiper ('.swiper-container', {
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

// 更多效果图
$('#xmore').on('click',function(){
    window.location.href="<?php echo url('home/mine/potos',['id'=>$data['id']]); ?>";
})
  
$('#moreping').on('click',function(){
    window.location.href="<?php echo url('home/mine/ping',['id'=>$data['id']]); ?>"
})

  $('header ul li').click(function(){
      console.log($(this));
            $(this).addClass('active');
            $(this).siblings().removeClass('active');
  })
  //填写评价
  $('#close-fping').click(function(){
         $('.faping').css({
              display:'none'
         })
  })
  $('.subping').click(function(){
         $('.faping').css({
            display:'block'
         })
  })
    //评价成功
  $('#close-pok').click(function(){
         $('.faping-ok').css({
              display:'none'
         })
  })
  $('#fabiao').click(function(){
        var con=$('#pinglun').val();
        var bid=$(this).attr('data-v');
        if(con==''){
            $('#pinglun').attr('placeholder','不能为空');
        }else{
            $.post(
                    "<?php echo url('home/index/sping'); ?>",
                    {'bid':bid,'content':con},
                    function(res){
                        if(res.code==200){
                            $('.faping').css({
                                display:'none'
                            })
                            $('.faping-ok').css({
                                display:'block'
                            })
                        }else if(res.code==300){
                            window.location.href="<?php echo url('home/mine/login',['id'=>$data['id']]); ?>";
                        }
                    }
                )
        }
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
  $('#que_pok').on('click',function(){
      $('.faping-ok').hide();
  })


$('.two').children().change(function(){
      console.log($(this).val());
}) 

//评论

// 精品房源特色
$('.l-left').on('click',function(){
    window.location.href="<?php echo url('home/mine/fy',['id'=>$data['id']]); ?>";
})
// 商业
$('.shang-pic').on('click',function(){
    window.location.href="<?php echo url('home/mine/sy',['id'=>$data['id']]); ?>";
})
// 物业
$('.wuye').on('click',function(){
    window.location.href="<?php echo url('home/mine/wy',['id'=>$data['id']]); ?>";
})

//菜单的显示与隐藏
 window.isshow=1;
$('#list').click(function(){
      
      if( window.isshow==1){
        $('header').slideUp("fast");
        window.isshow=2;
        $('.lunbo').css({
             marginTop:'0.8rem'
        })
      }else if( window.isshow==2){
        $('header').slideDown("fast");
        window.isshow=1;
        $('.lunbo').css({
             marginTop:'1.6rem'
        })
      }
  }) 
    // 点赞
    var l=1;
    $('.zanimg').on('click',function(){
        console.log(1)
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

</script>
</body>
</html>