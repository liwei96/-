<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"D:\phpstudy_pro\WWW\tp3\public/../application/home\view\mine\ping.html";i:1566722020;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <link rel="stylesheet" href="/static/home/csss/common/common.css">
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_1350331_95tz9eyhqij.css">
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_1329849_7za7eo8yzvj.css">
    <link rel="stylesheet" href="/static/home/csss/moreCommit.css">
    <link rel="stylesheet" href="/static/home/csss/common/footer.css">
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_1367531_3t0litim5l6.css">
    <title>更多评论</title>
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
            <span class="iconfont icon-caidan"></span>
    </div>
    <div class="more">
        <span class="iconfont iconjiantouzuo"></span>
        <h2>更多评论</h2>
    </div>
    <div class="ping">
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


    </div>
<!--footer-->
<div class="footer">
    <ul>
        <li><a href="javascript:;">首页</a></li>
        <li><a href="javascript:;">项目介绍</a></li>
        <li><a href="javascript:;">楼盘动态</a></li>
        <li><a href="javascript:;">楼盘图册</a></li>
        <li><a href="javascript:;">联系我们</a></li>
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
                        <input type="text" placeholder="请输入手机号" id="tel">
                 </div>
                 <div class="inputbox two">
                        <input type="text" placeholder="请输入姓名" id="name">
                 </div>
                    <input type="button" value="确定" class="yusub" data-v="<?php echo $id; ?>">
             </form>
         </div>
 </div>
</div>
  <!--底部-->
  <div class="dibu">
        <a href="tel:400-718-6656">
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
<!--发表评价成功模态框-->
<div class="faping-ok">
        <div class="faokbox">
             <div class="ping-ok-tit">
                     <img src="/static/home/img/del.png" alt="" id="close-pok">
             </div>
             <div class="pingres">
                 <img src="/static/home/img/ok.png" alt="">
                 <h4>提交成功</h4>
                 <input type="button" value="确定" id="que_pok">
             </div>
     </div>
            
</div>
<script src="/static/home/jss/jquery.min.js"></script>
<script src="/static/home/jss/yukan.js"></script>
    
<script>
// 后退
$('.more').on('click',function(){
    window.history.go(-1);
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


$('.yusub').on('click',function(){
    var tel=$('#tel').val();
    if(!(/^1[3|4|5|8][0-9]\d{4,8}$/.test(tel))){
            $('#tel').val('');
            $('#tel').attr('placeholder','手机号码格式错误，请重新输入');
            return false;
     }
    var name=$('#name').val();
    var id=$(this).attr('data-v');
    $.post(
        "<?php echo url('home/mine/yu'); ?>",
        {'phone':tel,'name':name,'bid':id},
        function(res){
            if(res.code==200){
                $('.yufang').hide();
                $('.faping-ok').css({
                    display:'block'
                })
            }
        }
    )
})


$('#close-pok').on('click',function(){
    $('.faping-ok').hide();
})
$('#que_pok').on('click',function(){
    $('.faping-ok').hide();
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
