<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"D:\phpstudy_pro\WWW\tp3\public/../application/home\view\mine\dongtail.html";i:1566888087;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <link rel="stylesheet" href="/static/home/csss/common/common.css">
    <link rel="stylesheet" href="/static/home/csss/lou_dong.css">
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_1350331_95tz9eyhqij.css">
    <link rel="stylesheet" href="/static/home/csss/common/footer.css">
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_1367531_3t0litim5l6.css">
    
    <title>楼盘动态</title>
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
                <li> <a href="<?php echo url('home/mine/index',['id'=>$data['bid']]); ?>" >首页</a></li>
                <li> <a href="<?php echo url('home/mine/intro',['id'=>$data['bid']]); ?>" >项目介绍</a></li>
                <li class="active">  <a href="<?php echo url('home/mine/dong',['id'=>$data['bid']]); ?>">楼盘动态</a></li>
                <li> <a href="<?php echo url('home/mine/potos',['id'=>$data['bid']]); ?>">楼盘图册</a></li>
                <li ><a href="<?php echo url('home/mine/lian',['id'=>$data['bid']]); ?>">联系我们</a></li>
      </ul>
      </header>
        <!--楼盘动态内容-->
       <div class="dong">
           <ul>
               <li>
                   <img src="<?php echo $data['img']; ?>" alt="">
                    <div class="dong-text">
                         <h2>来源：<span>售楼处</span></h2>
                         <p class="ju"><?php echo $data['introduce']; ?></p>
                    </div>
                    <div class="yin">
                          <ul>
                              <?php foreach($pings as $v): ?>
                              <li>
                                  <div class="top">
                                      <img src="/static/home/img/img.png" alt="">
                                      <div class="tel-name">
                                          <span><?php echo $v['tel']; ?></span>
                                          <p><?php echo $v['create_time']; ?></p>
                                      </div>
                                  </div>
                                  <p class="duan"><?php echo $v['con']; ?></p>
                              </li>
                              <?php endforeach; ?>
                              
                          </ul>
                          <div class="formbox">
                              <h3>发表一下想法</h3>
                              <form action="">
                                    <textarea name="" id="" cols="30" rows="10"></textarea>
                                     <input type="button" value="发表" data-v="<?php echo $data['id']; ?>" id="dbtn">

                              </form>
                          </div>
                    </div>
               </li>
              
           </ul>
       </div>

    <!--footer-->
<div class="footer pos">
        <ul>
                <li> <a href="<?php echo url('home/mine/index',['id'=>$data['bid']]); ?>" >首页</a></li>
                <li> <a href="<?php echo url('home/mine/intro',['id'=>$data['bid']]); ?>" >项目介绍</a></li>
                <li>  <a href="<?php echo url('home/mine/dong',['id'=>$data['bid']]); ?>">楼盘动态</a></li>
                <li> <a href="<?php echo url('home/mine/potos',['id'=>$data['bid']]); ?>">楼盘图册</a></li>
                <li ><a href="<?php echo url('home/mine/lian',['id'=>$data['bid']]); ?>">联系我们</a></li>
        </ul>
        <p>Copyright © 2017 - 2022 yidefang.com 浙ICP备18057005号</p>
    </div>

     <!--预约看房-->
     <div class="yufang fang">
        <div class="yubox">
             <div class="yu-fang-ok">
                     <p>预约看房</p>
                     <img src="/static/home/img/del.png" alt="" id="close-yu">
             </div>
             <div class="yures">
                 <h3>世茂泰禾·中央广场</h3>
                 <p>一键预约看房免费小车上门接送</p>
                 <form action="">
                     <div class="inputbox one">
                            <input type="text" placeholder="请输入手机号" id="ytel">
                     </div>
                     <div class="inputbox two">
                            <input type="text" placeholder="请输入姓名" id="yname">
                     </div>
                        <input type="button" value="确定" class="yusub" data-v="<?php echo $data['bid']; ?>">
                 </form>
             </div>
     </div>
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

<script src="/static/home/jss/jquery.min.js"></script>
<script src="/static/home/jss/yukan.js"></script>
<script>
      //预约看房获取手机号
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
//菜单的显示与隐藏
window.isshow=1;
$('#list').click(function(){
      if( window.isshow==1){
        $('header').slideUp("fast");
        window.isshow=2;
        $('.dong').css({
             marginTop:'0.8rem'
        })
      }else if( window.isshow==2){
        $('header').slideDown("fast");
        window.isshow=1;
        $('.dong').css({
             marginTop:'1.8rem'
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

  $('#dbtn').on('click',function(){
      var con=$(this).prev().val();
      var id=$(this).attr('data-v');
      if(con==''){
          return false;
      }
      $.post(
          "<?php echo url('home/index/dping'); ?>",
          {'con':con,'did':id},
          function(res){
              if(res.code==200){
                  location.reload();
              }else{
                  window.location.href="<?php echo url('home/mine/login',['id'=>$data['bid']]); ?>";
              }
          }
      )
  })
</script>
</body>
</html>