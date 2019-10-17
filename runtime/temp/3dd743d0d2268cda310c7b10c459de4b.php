<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"D:\phpstudy_pro\WWW\tp3\public/../application/home\view\mine\concat.html";i:1567050900;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_1350331_95tz9eyhqij.css">
    <link rel="stylesheet" href="/static/home/csss/common/common.css">
    <link rel="stylesheet" href="/static/home/csss/concat.css">
    <link rel="stylesheet" href="/static/home/csss/common/footer.css">
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_1367531_3t0litim5l6.css">
    <link rel="stylesheet" href="/static/home/csss/common/successmo.css">
    <title>联系我们</title>
    <script type="text/javascript">
        var bw = (document.documentElement.clientWidth/7.5)+"px";
        var htmlTag = document.getElementsByTagName("html")[0]; 
        htmlTag.style.fontSize=bw; 
    </script>
</head>
<body>
         <!--头部-->
    <div class="title">
            <h1><img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1565777367881&di=09f60c95761a4d993622fb57ccfb91fa&imgtype=0&src=http%3A%2F%2Fb-ssl.duitang.com%2Fuploads%2Fblog%2F201510%2F29%2F20151029140701_LXET5.jpeg" alt=""></h1>
            <span class="iconfont icon-caidan" id="list"></span>
    </div>
    <header class="head">
            <ul>
                    <li> <a href="<?php echo url('home/mine/index',['id'=>$id]); ?>" >首页</a></li>
            <li> <a href="<?php echo url('home/mine/intro',['id'=>$id]); ?>" >项目介绍</a></li>
            <li>  <a href="<?php echo url('home/mine/dong',['id'=>$id]); ?>">楼盘动态</a></li>
            <li> <a href="<?php echo url('home/mine/potos',['id'=>$id]); ?>">楼盘图册</a></li>
            <li class="active"><a href="<?php echo url('home/mine/lian',['id'=>$id]); ?>">联系我们</a></li>
              </ul>
    </header>
 <!--内容区域-->
 <div class="context">

    <div class="ying-time">
            <h1>营业时间</h1>
            <p>周一至周日上午8：00—晚上20：00</p>
    </div>
    <div class="telphone">
            <h1>24小时热线电话</h1>
            <p>售楼处：400-718-6686</p>
            <p>楼盘地址：<?php echo $name['building_address']; ?></p>
    </div>
    <div class="formbox">
        <p>您也可以留下您的电话号码，我们会第一时间与您取 得联系</p>
        <form action="" id="concatform">
            <span>姓名</span>
            <input type="text" id="username"/>

            <span>电话</span>
            <input type="text" id="telphone"/>

            <span>留言</span>
           <textarea name="" id="liu" cols="30" rows="10"></textarea>

            <input type="button" value="提交" class="btn" data-v="<?php echo $id; ?>">

        </form>
    </div>
     
</div>
<!--footer-->
<div class="footer">
        <ul>
                <li> <a href="<?php echo url('home/mine/index',['id'=>$id]); ?>" >首页</a></li>
                <li> <a href="<?php echo url('home/mine/intro',['id'=>$id]); ?>" >项目介绍</a></li>
                <li>  <a href="<?php echo url('home/mine/dong',['id'=>$id]); ?>">楼盘动态</a></li>
                <li> <a href="<?php echo url('home/mine/potos',['id'=>$id]); ?>">楼盘图册</a></li>
                <li ><a href="<?php echo url('home/mine/lian',['id'=>$id]); ?>">联系我们</a></li>
        </ul>
        <p>Copyright © 2017 - 2022 yidefang.com 浙ICP备18057005号</p>
      </div>
<!--底部-->
 <div class="dibu">
     <a href="tel:400-718-6686">
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
 <!--预约看房-->
 <div class="yufang fang">
    <div class="yubox">
         <div class="yu-fang-ok">
                 <p>预约看房</p>
                 <img src="/static/home/img/del.png" alt="" id="close-yu">
         </div>
         <div class="yures">
             <h3><?php echo $name['building_name']; ?></h3>
             <p>一键预约看房免费小车上门接送</p>
             <form action="" id="">
                 <div class="inputbox one">
                        <input type="text" placeholder="请输入手机号" id="ytel">
                 </div>
                 <div class="inputbox two">
                        <input type="text" placeholder="请输入姓名" id="yname">
                 </div>
                    <input type="button" value="确定" class="yusub" data-v="<?php echo $id; ?>">
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
                 <input type="button" value="确定" id="succbtn">
             </div>
     </div>
            
</div>
 <script src="/static/home/jss/jquery.min.js"></script>
 <script src="/static/home/jss/yukan.js"></script>
<script>
 $('header ul li').click(function(){
            $(this).addClass('active');
            $(this).siblings().removeClass('active');
  })
      //预约看房获取手机号
      $('.one').children().change(function(){
      var value=$(this).val();
      if(!(/^1[3|4|5|8][0-9]\d{4,8}$/.test(value))){
         $('.one').children().val('');
         $('.one').children().attr('placeholder','手机号码格式错误，请重新输入');
       return false;
      }
})

$('.btn').on('click',function(){
    var name=$('#username').val();
    var tel=$('#telphone').val();
    var pattern_phone = /^1[3-9][0-9]{9}$/;
				if (tel == '') {
					$('#telphone').attr('placeholder','手机号码不能为空');
					return;
				} else if (!pattern_phone.test(tel)) {
                    $('#telphone').val('');
					$('#telphone').attr('placeholder','手机号码不合法');
					return;
				} else {
					$('#telphone').attr('placeholder','');
				}
    var liu=$('#liu').val();
    if(liu==''){
        $('#liu').attr('placeholder','留言不能为空');
    }
    var id=$(this).attr('data-v');
    $.post(
        "<?php echo url('home/index/liu'); ?>",
        {'name':name,'tel':tel,'con':liu,'bid':id},
        function(res){
            if(res.code==200){
                $('.faping-ok').show();
            }
        }
    )
})

// 
$('#close-pok').on('click',function(){
    $('.faping-ok').hide();
})
$('#succbtn').on('click',function(){
    $('.faping-ok').hide();
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

 //表单内容
 $('#username').change(function(){
        console.log($(this).val())
 })
$('#telphone').change(function(){
    var tel=$(this).val();
    if(!(/^1[3|4|5|8][0-9]\d{4,8}$/.test(tel))){
         $(this).val('');
         $(this).attr('placeholder','手机号码格式错误，请重新输入');
         return false;
      }
       console.log($(this).val())
})
$('#liu').change(function(){
       console.log($(this).val())
})
//菜单显示隐藏
window.isshow=1;
$('#list').click(function(){
      
      if( window.isshow==1){
        $('header').slideUp("fast");
        window.isshow=2;
        $('.context').css({
             marginTop:'1.1rem'
        })
        // console.log( window.isshow)
      }else if( window.isshow==2){
        // console.log( window.isshow)
        $('header').slideDown("fast");
        window.isshow=1;
        $('.context').css({
             marginTop:'1.9rem'
        })
      }
  }) 

</script>
</body>
</html>