<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"D:\phpstudy_pro\WWW\tp3\public/../application/home\view\mine\login.html";i:1566882649;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_1329849_7za7eo8yzvj.css">
    <link rel="stylesheet" href="http:////at.alicdn.com/t/font_1350331_95tz9eyhqij.css">
    <link rel="stylesheet" href="/static/home/csss/common/common.css">
    <link rel="stylesheet" href="/static/home/csss/login.css">
    <title>登录</title>
    <script type="text/javascript">
        var bw = (document.documentElement.clientWidth/7.5)+"px";
        var htmlTag = document.getElementsByTagName("html")[0]; 
        htmlTag.style.fontSize=bw; 
    </script>
</head>
<body>
   <div class="deng-tit">
        <span class="iconfont  iconjiantouzuo"></span>
        <h1>快速登录</h1>
   </div>

   <div class="loginbox">
       <img src="/static/home/img/login.png" alt="" class="loginimg">
     <form action="">
    <div class="inputbox">
         <div class="username">
             <span class="iconfont icon-yonghuming"></span>
             <input type="text" placeholder="请输入您的帐号" class="u-text">
             <input type="button" value="获取验证码" class="u-btn"/>
         </div>
         <div class="password">
                <span class="iconfont icon-mima"></span>
                <input type="text" placeholder="请输入您的验证码" class="u-yan">
         </div>
            
            <input type="button" value="登录" class="loginsub">
    </div>
    </form>
    <img src="/static/home/img/footer.png" alt="" class="footimg">
   </div>
 <!--footer-->
<div class="footer1 pos">
        <ul>
            <li><a href="javascript:;">首页</a></li>
            <li><a href="javascript:;">项目介绍</a></li>
            <li><a href="javascript:;">楼盘动态</a></li>
            <li><a href="javascript:;">楼盘图册</a></li>
            <li><a href="javascript:;">联系我们</a></li>
        </ul>
        <p>Copyright © 2017 - 2022 yidefang.com 浙ICP备18057005号</p>
</div>


   <script src="/static/home/jss/jquery.min.js"></script>
<script type="text/javascript">
        $('.u-text').change(function(){
                console.log($(this).val())
                var tel=$(this).val();
                if(!(/^1[3|4|5|8][0-9]\d{4,8}$/.test(tel))){
                    $(this).val('');
                    $(this).attr('placeholder','手机号码格式错误，请重新输入');
                    return false;
     }
        })

        $('.u-yan').change(function(){
               console.log($(this).val())
        })

        // 后退
        $('.iconjiantouzuo').on('click',function(){
            window.history.go(-1);
        })

        // 验证码
        $('.u-btn').on('click',function(){
            var phone=$('.u-text').val();
                var pattern_phone = /^1[3-9][0-9]{9}$/;
				if (phone == '') {
					$('.u-text').attr('placeholder','手机号码不能为空');
					return;
				} else if (!pattern_phone.test(phone)) {
                    $('.u-text').val('');
					$('.u-text').attr('placeholder','手机号码不合法');
					return;
				} else {
					$('.u-text').attr('placeholder','');
				}

                var time=60;
                var fn = function () {
					time--;
					if (time > 0) {
						$('.u-btn').val('再发送' + time + 's');
                        $('.u-btn').attr('disabled', true);
					} else {
						clearInterval(interval);
						$('.u-btn').val('获取验证码');
						$('.u-btn').attr('disabled', false);
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
  
        $('.loginsub').on('click',function(){
            var tel=$('.u-text').val();
                var ma=$('.u-yan').val();
                console.log(ma);
                $.post(
                    "<?php echo url('home/index/log'); ?>",
                    {'phone':tel,'code':ma},
                    function(res){
                        if(res.code==200){
                            window.location.href="<?php echo url('home/mine/index',['id'=>$id]); ?>";
                        }
                    }
                )
        })
</script>

</body>
</html>