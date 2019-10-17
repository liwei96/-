<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"D:\phpstudy_pro\WWW\tp3\public/../application/home\view\mine\potos.html";i:1566889313;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_1350331_95tz9eyhqij.css">
    <link rel="stylesheet" href="/static/home/csss/common/common.css">
    <link rel="stylesheet" href="/static/home/csss/louphoto.css">
    <link rel="stylesheet" href="/static/home/csss/xuan.css">
    <link rel="stylesheet" href="/static/home/csss/common/footer.css">
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_1367531_3t0litim5l6.css">
    <title>楼盘图册</title>
    <script type="text/javascript">
        var bw = (document.documentElement.clientWidth/7.5)+"px";
        var htmlTag = document.getElementsByTagName("html")[0]; 
        htmlTag.style.fontSize=bw; 
    </script>
</head>
<body>
       <!--头部-->
  <div class="title tit">
        <h1><img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1565777367881&di=09f60c95761a4d993622fb57ccfb91fa&imgtype=0&src=http%3A%2F%2Fb-ssl.duitang.com%2Fuploads%2Fblog%2F201510%2F29%2F20151029140701_LXET5.jpeg" alt=""></h1>
        <span class="iconfont icon-caidan" id="list"></span>
</div>

<header class="tou">
        <ul>
                <li> <a href="<?php echo url('home/mine/index',['id'=>$id]); ?>" >首页</a></li>
          <li> <a href="<?php echo url('home/mine/intro',['id'=>$id]); ?>" >项目介绍</a></li>
          <li>  <a href="<?php echo url('home/mine/dong',['id'=>$id]); ?>">楼盘动态</a></li>
          <li class="active"> <a href="<?php echo url('home/mine/potos',['id'=>$id]); ?>">楼盘图册</a></li>
          <li ><a href="<?php echo url('home/mine/lian',['id'=>$id]); ?>">联系我们</a></li>
          </ul>
</header>
<!--选项卡-->
<div id="box">
    <ul id="menu">
        <li class="active">全部</li>
        <li>效果图</li>
        <li>实景图</li>
        <li>样板房</li>
        <li>配套图</li>
        <li>交通图</li>
    </ul>
    <div id="panel">
        <div class="panel active">
            <?php foreach($ximgs as $v): ?>
            <img src="<?php echo $v['x_big']; ?>"/>
            <?php endforeach; foreach($simgs as $v): ?>
            <img src="<?php echo $v['s_big']; ?>"/>
            <?php endforeach; foreach($yimgs as $v): ?>
            <img src="<?php echo $v['y_big']; ?>"/>
            <?php endforeach; foreach($pimgs as $v): ?>
            <img src="<?php echo $v['p_big']; ?>"/>
            <?php endforeach; foreach($jimgs as $v): ?>
            <img src="<?php echo $v['j_big']; ?>"/>
            <?php endforeach; ?>
        </div>
        <div class="panel">
                <?php foreach($ximgs as $v): ?>
                <img src="<?php echo $v['x_big']; ?>"/>
                <?php endforeach; ?>
        
       </div>
        <div class="panel">
                <?php foreach($simgs as $v): ?>
                <img src="<?php echo $v['s_big']; ?>"/>
                <?php endforeach; ?>
         
      </div> 
        <div class="panel">
                <?php foreach($yimgs as $v): ?>
                <img src="<?php echo $v['y_big']; ?>"/>
                <?php endforeach; ?>
        
        </div>
        <div class="panel">
                <?php foreach($pimgs as $v): ?>
                <img src="<?php echo $v['p_big']; ?>"/>
                <?php endforeach; ?>
        
        </div>
        <div class="panel">
                <?php foreach($jimgs as $v): ?>
                <img src="<?php echo $v['j_big']; ?>"/>
                <?php endforeach; ?>
        
        </div>
  </div>

</div>
<!--footer-->
<div class="footer pos">
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
      <!--预约看房-->
   <div class="yufang fang">
    <div class="yubox">
         <div class="yu-fang-ok">
                 <p>预约看房</p>
                 <img src="/static/home/img/del.png" alt="" id="close-yu">
         </div>
         <div class="yures">
             <h3><?php echo $name; ?></h3>
             <p>一键预约看房免费小车上门接送</p>
             <form action="">
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
<script src="/static/home/jss/jquery.min.js"></script>
<script src="/static/home/jss/yukan.js"></script>
<script type="text/javascript">
    $('li').click(function(){

            $(this).addClass('active');
            $(this).siblings().removeClass('active');
            $('.panel').siblings().removeClass('active');
             $('.panel').eq($(this).index()).addClass('active');
            
    })
    $('header ul li').click(function(){
            $(this).addClass('active');
            $(this).siblings().removeClass('active');
  })

    //预约看房获取手机号
    $('.one').children().change(function(){
        var value=$(this).val();
        if(!(/^1[3|4|5|8][0-9]\d{4,8}$/.test(value))){
            console.log( $('.one').children().attr('placeholder'));
            $('.one').children().val('');
            $('.one').children().attr('placeholder','手机号码格式错误，请重新输入');
            return false;
     }
    })
    $('.two').children().change(function(){
}) 


//菜单的显示与隐藏
window.isshow=1;
$('#list').click(function(){
      if( window.isshow==1){
        $('header').slideUp("fast");
        window.isshow=2;
        $('#box').css({
             marginTop:'0.8rem'
        })
      }else if( window.isshow==2){
        $('header').slideDown("fast");
        window.isshow=1;
        $('#box').css({
             marginTop:'1.6rem'
        })
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
</script>

</body>
</html>