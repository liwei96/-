<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"D:\phpstudy_pro\WWW\tp3\public/../application/home\view\index\photo.html";i:1566976153;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/static/home/css/common/common.css">
    <link rel="stylesheet" href="/static/home/css/contact.css">
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_1367531_3t0litim5l6.css">
    <title>楼盘图册</title>
    <link rel="stylesheet" href="/static/home/css/lou_photo.css">
	<script src="/static/home/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
     <!--头部-->
     <div class="header">
            <div class="header-cen">
              <h1><img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1564563508716&di=0ba2528b7671fc67109f8da354956575&imgtype=0&src=http%3A%2F%2Fimg.cndesign.com%2Fupload%2Fnews%2F20180408%2Fd5039b0992584fbf98b00da57e33b528.jpg" alt=""></h1>
                <div class="header-select">
                        <a href="<?php echo url('home/index/index',['id'=>$id]); ?>" >首页</a>
                        <a href="<?php echo url('home/index/introduce',['id'=>$id]); ?>">项目介绍</a>
                        <a href="<?php echo url('home/index/dong',['id'=>$id]); ?>">楼盘动态</a>
                        <a href="<?php echo url('home/index/photo',['id'=>$id]); ?>" class="activehead">楼盘图册</a>
                        <a href="<?php echo url('home/index/lian',['id'=>$id]); ?>">联系我们</a>
                        <a href="javascript:;"  class="denglu">登录/注册</a>
                        <span class="iconfont icondianhua"></span>
                        <i>售楼处电话：400-8888-777</i>
                    </div>
            </div>
        </div>
         <!--内容-->
        <div id="box">
                <ul id="menu">
                    <li class="active">全部</li>
                    <li>效果图</li>
                    <li>实景图</li>
                    <li>样板房</li>
                    <li>配套图</li>
                    <li>交通图</li>
                    <li>户型图</li>
                </ul>
                <div id="panel">
                    <div class="panel active">
                        <ul>
                            <?php foreach($ximgs as $v): ?>
                            <li><img src="<?php echo $v['x_big']; ?>"  alt=""  class="img" /></li>
                            <?php endforeach; foreach($simgs as $v): ?>
                            <li><img src="<?php echo $v['s_big']; ?>" alt=""   class="img"></li>
                            <?php endforeach; foreach($yimgs as $v): ?>
                            <li><img src="<?php echo $v['y_big']; ?>" alt=""   class="img"></li>
                            <?php endforeach; foreach($pimgs as $v): ?>
                            <li><img src="<?php echo $v['p_big']; ?>" alt=""  class="img"></li>
                            <?php endforeach; foreach($jimgs as $v): ?>
                            <li><img src="<?php echo $v['j_big']; ?>" alt=""  class="img"></li>
                            <?php endforeach; foreach($huimgs as $v): ?>
                            <li><img src="<?php echo $v['h_big']; ?>" alt=""  class="img"></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <div class="panel">
                            <ul>
                                    <?php foreach($ximgs as $v): ?>
                            <li><img src="<?php echo $v['x_big']; ?>"  alt=""  class="img" /></li>
                            <?php endforeach; ?>
                                </ul>
                   </div>

                  <div class="panel">
                        <ul>
                                <?php foreach($simgs as $v): ?>
                            <li><img src="<?php echo $v['s_big']; ?>" alt=""   class="img"></li>
                            <?php endforeach; ?>
                            </ul>
                   
                  </div>
                <div class="panel">
                        <ul>
                                <?php foreach($yimgs as $v): ?>
                            <li><img src="<?php echo $v['y_big']; ?>" alt=""   class="img"></li>
                            <?php endforeach; ?>
                        </ul>
                    
                </div>
                <div class="panel">
                        <ul>
                                <?php foreach($pimgs as $v): ?>
                                <li><img src="<?php echo $v['p_big']; ?>" alt=""  class="img"></li>
                                <?php endforeach; ?>
                            </ul>
                  
                </div>
              <div class="panel">
                      <ul>
                            <?php foreach($jimgs as $v): ?>
                            <li><img src="<?php echo $v['j_big']; ?>" alt=""  class="img"></li>
                            <?php endforeach; ?>
                        </ul>
                 
              </div>
              <div class="panel">
                    <ul class="huxing">
                            <?php foreach($huimgs as $v): ?>
                            <li><img src="<?php echo $v['h_big']; ?>" alt=""  class="img"></li>
                            <?php endforeach; ?>
                        </ul>
               </div>
            
        </div>
    </div>
  <!--footer -->
  <div class="footer">
        <div class="footer-cen">
            <ul>
                    <li><a href="<?php echo url('home/index/index',['id'=>$id]); ?>">首页</a></li>
                    <li><a href="<?php echo url('home/index/introduce',['id'=>$id]); ?>">项目介绍</a></li>
                    <li><a href="<?php echo url('home/index/dong',['id'=>$id]); ?>">楼盘动态</a></li>
                    <li><a href="<?php echo url('home/index/photo',['id'=>$id]); ?>">楼盘图册</a></li>
                    <li><a href="<?php echo url('home/index/lian',['id'=>$id]); ?>">联系我们</a></li>
                  <li> <input type="text"  placeholder="输入您的手机查询详细楼盘资料"><a href="javascript:;" class="tel_ti">提交</a></li>
                  <li><a href="javascript:;">售楼处电话：400-8888-777</a></li>
            </ul>
    <p>Copyright © 2017 - 2022 杭州易得房网络有限公司有限公司版权所有 浙ICP备18057005号</p>
    
    
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

<!--放大图片功能-->
<div id="outerdiv" style="position:fixed;top:0;left:0;background:rgba(0,0,0,0.7);z-index:100;width:100%;height:100%;display:none;">
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
                            <a href="javascript:;" class="ma">获取验证码</a>
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

            <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
            <script type="text/javascript">

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

                $('#menu li').click(function(){
                        console.log(this);
                        $(this).addClass('active');
                        $(this).siblings().removeClass('active');
                        
                        $('.panel').siblings().removeClass('active');
                        console.log($(this).index());
                         $('.panel').eq($(this).index()).addClass('active');
                        
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

    window.onscroll = function() {
        // console.log("滚动");

        //打印滚动高度
        var scrollTop = document.documentElement.scrollTop||document.body.scrollTop;
         console.log(scrollTop);
        
    };

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