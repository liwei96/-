<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"D:\phpstudy_pro\WWW\tp3\public/../application/home\view\index\lian.html";i:1567049046;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>联系我们</title>
  
    <link rel="stylesheet" href="/static/home/css/common/common.css">
    <link rel="stylesheet" href="/static/home/css/contact.css">
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_1367531_3t0litim5l6.css">
    <script src="/static/home/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
        <div class="header">
                <div class="header-cen">
                  <h1><img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1564563508716&di=0ba2528b7671fc67109f8da354956575&imgtype=0&src=http%3A%2F%2Fimg.cndesign.com%2Fupload%2Fnews%2F20180408%2Fd5039b0992584fbf98b00da57e33b528.jpg" alt=""></h1>
                  <div class="header-select">
                        <a href="<?php echo url('home/index/index',['id'=>$id]); ?>" >首页</a>
                        <a href="<?php echo url('home/index/introduce',['id'=>$id]); ?>">项目介绍</a>
                        <a href="<?php echo url('home/index/dong',['id'=>$id]); ?>">楼盘动态</a>
                        <a href="<?php echo url('home/index/photo',['id'=>$id]); ?>">楼盘图册</a>
                        <a href="<?php echo url('home/index/lian',['id'=>$id]); ?>" class="activehead">联系我们</a>
                        <a href="javascript:;"  class="denglu">登录/注册</a>
                        <span class="iconfont icondianhua"></span>
                        <i>售楼处电话：400-718-6686</i>
                    </div>
                </div>
            </div>
            <!--内容-->
            <div class="contact">
                <div class="contact-cen">
                        <div class="time">
                                <div class="top-time">
                                    <h6>营业时间</h6>
                                    <p>周一至周日上午8：00—晚上20：00</p>
                                </div>
                                <div class="bot-tel">
                                    <h5>24小时热线电话</h5>
                                    <h6>售楼处：400-718-6686</h6>
                                    <p>项目地址：<?php echo $data['building_address']; ?></p>
                                </div>
                        </div>
                        <div class="liuyan">
                            <h4>您也可以留下您的电话号码，我们会第一时间与您取得联系</h4>
                        <form action="" method="get">
                            <span>姓名</span><br>
                            <input id="name" type="text"/><br>
                            <span>电话</span><br>
                            <input id="tel" type="text"/><br>
                            <span>留言</span><br>
                            <textarea name="" id="liu" cols="30" rows="10"></textarea><br/>
                            <input type="button" class="subbtn" data-v="<?php echo $id; ?>" value="提交"/>
                        </form>

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
              <li> <input type="text" placeholder="输入您的手机查询详细楼盘资料"><a href="javascript:;" class="tel_ti" data-v="<?php echo $id; ?>">提交</a></li>
              <li><a href="javascript:;">售楼处电话：400-718-6686</a></li>
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
        // 留言提交
        $('.subbtn').on('click',function(){
            var name=$('#name').val();
            var phone=$('#tel').val();
            var pattern_phone = /^1[3-9][0-9]{9}$/;
				if (phone == '') {
					$('#tel').attr('placeholder','手机号码不能为空');
					return;
				} else if (!pattern_phone.test(phone)) {
                    $('#tel').val('');
					$('#tel').attr('placeholder','手机号码不合法');
					return;
				} else {
					$('#tel').attr('placeholder','');
				}
            var liu=$('#liu').val();
            var id=$(this).attr('data-v');
            $.post(
                    "<?php echo url('home/index/liu'); ?>",
                    {'name':name,'tel':phone,'con':liu,'bid':id},
                    function(res){
                        if(res.code==200){
                            $('.mo-ti').show();
                        }
                    }
                )
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