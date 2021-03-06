<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"D:\phpstudy_pro\WWW\tp3\public/../application/home\view\index\index.html";i:1567048067;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/static/home/css/common/common.css">
    <link rel="stylesheet" href="/static/home/css/index.css">
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_1329849_a342433cger.css">
    <link rel="stylesheet" href="/static/home/js/aos/dist/aos.css">
    <link rel="stylesheet" href="/static/home/css/swiper.min.css">
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_1367531_3t0litim5l6.css">
  
    <script src="/static/home/js/swiper.min.js"></script>
    
    <script src="/static/home/js/common.js"></script>
    <script src="/static/home/js/animateBak.js"></script>
    <title>易得房</title>
    <style>
            body[aos-duration='4000'] [aos], [aos][aos][aos-duration='4000']{
        transition-duration: 4000ms;
        }
        .swiper-container {
        width: 100%;
        height: 550px;
        } 
        .swiper-container  .swiper-slide img {
            width:100%;
            height:550px;
        }
        
        
    </style>
</head>
<body> 
    <div class="header">
        <div class="header-cen">
          <h1><img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1564563508716&di=0ba2528b7671fc67109f8da354956575&imgtype=0&src=http%3A%2F%2Fimg.cndesign.com%2Fupload%2Fnews%2F20180408%2Fd5039b0992584fbf98b00da57e33b528.jpg" alt=""></h1>
          <div class="header-select">
              <a href="<?php echo url('home/index/index',['id'=>$data['id']]); ?>" class="activehead">首页</a>
              <a href="<?php echo url('home/index/introduce',['id'=>$data['id']]); ?>">项目介绍</a>
              <a href="<?php echo url('home/index/dong',['id'=>$data['id']]); ?>">楼盘动态</a>
              <a href="<?php echo url('home/index/photo',['id'=>$data['id']]); ?>">楼盘图册</a>
              <a href="<?php echo url('home/index/lian',['id'=>$data['id']]); ?>">联系我们</a>
              <a href="javascript:;"  class="denglu">登录/注册</a>
             <span class="iconfont icondianhua"></span>
            <i>售楼处电话：400-8888-777</i>
          </div>

        </div>
    </div>
      <!-- 轮播 -->
    <div class="box">
            <div class="lunboimg">
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
        <!-- <ul class="item">
            <?php foreach($zhu as $k=>$v): ?>
            <li <?php if($k==0): ?>style="opacity: 1"<?php endif; ?>><img src="<?php echo $v['img']; ?>"></li>
            <?php endforeach; ?>
            
        </ul>
        <button class="leftBtn">&lt;</button>
        <button class="rightBtn">&gt;</button>
    
        <ul class="page"><?php foreach($zhu as $v): ?><li></li><?php endforeach; ?> -->

    </div>
     <!-- content -->
    <div class="content-top">
           <div class="content-top-center">
                 <div class="title-cen">
                        <div class="title" data-aos="flip-left" data-aos-offset="200" data-aos-easing="ease-in-sine">
                           
                            <a href="#"> <div class="title-left"></div>走进<?php echo $data['name']; ?><div class="title-right"></div></a>
                           
                         </div>
                         <p>Walking into Shimao & Taihe</p>
              </div>
                         <div class="content">
                                <div class="left-img code code--small code--left aos-init aos-animate" data-aos="fade-right" data-aos-offset="200" data-aos-easing="ease-in-sine">
                                        <img src="<?php echo $data['building_img']; ?>" alt="">
                                </div>
                                <div class="content-text">
                                    <ul>
                                        <li  data-aos="fade-left" data-aos-offset="200" data-aos-easing="ease-in-sine"><span></span><?php echo $data['kone_intro']; ?></li>
                                        <li  data-aos="fade-left" data-aos-offset="200" data-aos-easing="ease-in-sine"><span></span><?php echo $data['ktwo_intro']; ?></li>
                                    </ul>
                                </div>
                         </div>
              
                    
           </div> 
    </div>

    <!-- about -->
    <div class="tese">
        <div class="tese-cen">
             <div class="biao-ti">
                      <div class="title" data-aos="flip-left" data-aos-offset="200" data-aos-easing="ease-in-sine" style="position:relative">
                            <div class="title-left"></div>
                            <a href="#">了解<?php echo $data['building_name']; ?></a>
                            <div class="title-right"></div>
                         </div>
                         <p>Understanding Shimao Taihe Central Plaza</p>
             </div>
             <div class="icon"> 
                    <ul>
                        <li  data-aos="fade-right" data-aos-offset="200" data-aos-easing="ease-in-sine">
                                <div><img src="/static/home/imgs/tese.png" alt=""></div>
                                <div class="icon-content">
                                    <span>精品房源特色 </span>
                                    <p><?php echo $data['fytese']; ?></p>
                                </div>
                        </li>
                        <li  data-aos="fade-up" data-aos-offset="200" data-aos-easing="ease-in-sine">
                                <div><img src="/static/home/imgs/shang.png" alt=""></div>
                                <div class="icon-content">
                                        <span>成熟商业体系 </span>
                                        <p><?php echo $data['sytixi']; ?></p>
                                </div>
                        </li>
                        <li  data-aos="fade-left" data-aos-offset="200" data-aos-easing="ease-in-sine">
                                <div><img src="/static/home/imgs/wuye.png" alt=""></div>
                                <div class="icon-content">
                                        <span>高端物业管理 </span>
                                        <p><?php echo $data['wlguanli']; ?></p>
                                </div>
                        </li>
                    </ul>
             </div>
        </div>  
    </div>
     <!-- adv -->
     <div class="adv" data-aos="fade-up" data-aos-offset="200" data-aos-easing="ease-in-sine"><img src="/static/home/imgs/ztel.png" alt=""></div>
     <!-- xiaoguo -->
     <div class="xiaoguo">
             <div class="xiaoguo-cen">
                    <div class="tit">
                            <div class="title" data-aos="flip-left" data-aos-offset="200" data-aos-easing="ease-in-sine">
                                    <div class="title-left"></div>
                                    <a href="#">楼盘效果图</a>
                                    <div class="title-right"></div>
                            </div>
                                 <p>Building Effect Map</p>
                    </div>
                    <div class="pic">
                        <ul>
                            <?php foreach($xiao as $k=>$v): ?>
                            <li data-aos="<?php if($k==0): ?>fade-right<?php elseif($k==1): ?>fade-up<?php elseif($k==2): ?>fade-left<?php endif; ?>" data-aos-offset="200" data-aos-easing="ease-in-sine"><img src="<?php echo $v['x_big']; ?>" alt="" class="img"></li>
                            <?php endforeach; ?>
                            <!-- <li data-aos="fade-up" data-aos-offset="200" data-aos-easing="ease-in-sine"><img src=".//static/home/imgs/jian_2.jpg" alt=""  class="img"></li> -->
                            <!-- <li data-aos="fade-left" data-aos-offset="200" data-aos-easing="ease-in-sine"><img src=".//static/home/imgs/jian_3.jpg" alt="" class="img"></li> -->
                        </ul>

                    </div>
             </div>
     </div>
 <!--talk -->
<div class="talk">
    <div class="talk-cen">
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
                 <span><?php echo $v['num']; ?></span> 
            </div>
        </div>
        <?php endforeach; ?>
                
    




        

            

        <a href="javascript:;" class="btn"><img src="/static/home/imgs/commit.png">写评论</a>

    </div>
</div>
 <!--footer -->
<div class="footer">
    <div class="footer-cen">
        <ul>
            <li><a href="<?php echo url('home/index/index',['id'=>$data['id']]); ?>">首页</a></li>
            <li><a href="<?php echo url('home/index/introduce',['id'=>$data['id']]); ?>">项目介绍</a></li>
            <li><a href="<?php echo url('home/index/dong',['id'=>$data['id']]); ?>">楼盘动态</a></li>
            <li><a href="<?php echo url('home/index/photo',['id'=>$data['id']]); ?>">楼盘图册</a></li>
            <li><a href="<?php echo url('home/index/lian',['id'=>$data['id']]); ?>">联系我们</a></li>
              <li> <input type="text" placeholder="输入您的手机查询详细楼盘资料"><a href="javascript:;" class="tel_ti" data-v="<?php echo $data['id']; ?>">提交</a></li>
              <li><a href="javascript:;">售楼处电话：400-8888-777</a></li>
        </ul>
<p>Copyright © 2017 - 2022 杭州易得房网络有限公司有限公司版权所有 浙ICP备18057005号</p>
    </div>
</div>

 <!--评价模态框 -->
<div class="mo">
        <div class="ping-kuang">
            <div class="title2"><img src="/static/home/imgs/bktou.png" alt=""><img class="wenzi" src="/static/home/imgs/title.png" alt="">
                <img src="/static/home/imgs/bai.png" alt=""  class="close"></div>
            <div class="content">
                    <p>评价</p>
                   <form action="">
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                        <input type="button" value="发表" class="tijiao" data-v="<?php echo $data['id']; ?>">
                   </form>
            </div>
        </div>
</div>
 <!--评价成功模态框-->
 <div class="mo-success">
    <div class="ping-success">
       <div class="biao">
            <img src="/static/home/imgs/ping0k.png" alt="" class="dui">
            <img src="/static/home/imgs/bai.png" alt="" class="guan">
       </div>
       <div class="success-content">
            <p>评价成功</p>
            <input type="button" value="确定" class="queren">

       </div>
    </div>
</div>
<!--登录模态框-->
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
                                <!-- <button href="javascript:;" class="ma">获取验证码</button> -->
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
<!--放大图片功能-->
<div id="outerdiv" style="position:fixed;top:0;left:0;background:rgba(0,0,0,0.7);z-index:100;width:100%;height:100%;display:none;">
    <div id="innerdiv" style="position:absolute;">
        <img id="bigimg" style="border:5px solid #fff;" src="" />
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


    <!-- <script src="/static/home/js/lunbo.js"></script> -->
    <script src="/static/home/js/aos/dist/aos.js"></script>
    <script src="/static/home/js/jquery.min.js"></script>
    <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
    <script>
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
        AOS.init({
            offset: 200,
            duration: 600,
            easing: 'ease-in-sine',
            delay: 100,
            });

        //提交成功模态
       
        $('.queren2').click(function(){
                $('.mo-ti').css({
                       display:'none'
                })
        })

         //头部点击
        $('.header-select a').click(function(){
             $(this).addClass('activehead')
             $(this).siblings().removeClass('activehead')
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
                            $('.login').hide();
                            $('.mo-ti').show();
                        }
                    }
                )
            })

        //模态框隐藏
        $('.close').click(function(){
                $('.mo').css({
                       display:'none'
                })
        })
        $('.guan').click(function(){
                $('.mo-success').css({
                       display:'none'
                })
        })
        $('.queren').click(function(){
                $('.mo-success').css({
                       display:'none'
                })
        })
        $('.btn').click(function(){
                $('.mo').css({
                        display:'block'
                })
        })
        $('.tijiao').click(function(){
            var con=$(this).prev().val();
            var bid=$(this).attr('data-v');
            if(con){
                $.post(
                    "<?php echo url('home/index/sping'); ?>",
                    {'bid':bid,'content':con},
                    function(res){
                        if(res.code==200){
                            $('.mo').css({
                                display:'none'
                            })
                            $('.mo-success').css({
                                display:'block'
                            })
                        }else if(res.code==300){
                            $('.denglu').click();
                        }
                    }
                )
            }else{
                $(this).prev().attr('placeholder','内容不能为空');
            }
               
        })


    
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


