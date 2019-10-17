<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"D:\phpstudy_pro\WWW\tp3\public/../application/home\view\index\dong.html";i:1566554414;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/static/home/css/common/common.css">
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_1329849_7za7eo8yzvj.css">
    <link rel="stylesheet" href="/static/home/css/lou_dong.css">
    <link rel="stylesheet" href="/static/home/css/contact.css">
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_1367531_3t0litim5l6.css">
    <title>楼盘动态</title>
    <style>
        .conText .page{
            display: none;
        }
    </style>
</head>
<body>
    <!--头部-->
    <div class="header">
        <div class="header-cen">
          <h1><img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1564563508716&di=0ba2528b7671fc67109f8da354956575&imgtype=0&src=http%3A%2F%2Fimg.cndesign.com%2Fupload%2Fnews%2F20180408%2Fd5039b0992584fbf98b00da57e33b528.jpg" alt=""></h1>
                <div class="header-select">
                    <a href="<?php echo url('home/index/index',['id'=>$data['id']]); ?>" >首页</a>
                    <a href="<?php echo url('home/index/introduce',['id'=>$data['id']]); ?>">项目介绍</a>
                    <a href="<?php echo url('home/index/dong',['id'=>$data['id']]); ?>" class="activehead">楼盘动态</a>
                    <a href="<?php echo url('home/index/photo',['id'=>$data['id']]); ?>">楼盘图册</a>
                    <a href="<?php echo url('home/index/lian',['id'=>$data['id']]); ?>">联系我们</a>
                    <a href="javascript:;"  class="denglu">登录/注册</a>
                    <span class="iconfont icondianhua"></span>
                    <i>售楼处电话：400-8888-777</i>
                </div>
        </div>
    </div>
 <!--内容-->
<div class="conText">
        <div class="conText-cen">
                <ul>
                    <?php foreach($dongs as $v): ?>
                    <li>
                        <div class="date">
                            <span>7.11</span>
                            <img src="<?php echo $v['img']; ?>" alt="">
                        </div>
                        <div class="content">
                            <span class="origin">来源：<i>售楼处</i></span>
                            <div class="con-rig">
                                <p>
                                    <?php echo $v['introduce']; ?>  
                                    </p>
                                    <span class="liaojie" data-v="<?php echo $v['id']; ?>">继续了解</span>
                            </div>
                        
                        </div>
                        <!--隐藏的评价模块-->
                         <div class="ping">
                                <div class="ping-list">
                                        <div class="big-talk" data-aos="fade-right" data-aos-offset="200" data-aos-easing="ease-in-sine">
                                                <div class="left-talk">
                                                    <div class="head"><img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1564661814898&di=ea578fb4c9f4eecfcd814ac0869796c8&imgtype=0&src=http%3A%2F%2Fb-ssl.duitang.com%2Fuploads%2Fitem%2F201508%2F04%2F20150804211608_KLFV2.jpeg" alt=""></div>
                                                    <div class="talk-list">
                                                        <div class="talk-time"><span>147****4876 </span> <i>2019-04-17</i></div>   
                                                        <p>马上要推出小户型了吧，感觉买个89平的就可以，不知道公摊要多少马上要推出小户型了吧，感觉买个89平的就可以，不知道公摊要多少</p>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="big-talk" data-aos="fade-right" data-aos-offset="200" data-aos-easing="ease-in-sine">
                                                <div class="left-talk">
                                                    <div class="head"><img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1564661814898&di=ea578fb4c9f4eecfcd814ac0869796c8&imgtype=0&src=http%3A%2F%2Fb-ssl.duitang.com%2Fuploads%2Fitem%2F201508%2F04%2F20150804211608_KLFV2.jpeg" alt=""></div>
                                                    <div class="talk-list">
                                                        <div class="talk-time"><span>147****4876 </span> <i>2019-04-17</i></div>   
                                                        <p>马上要推出小户型了吧，感觉买个89平的就可以，不知道公摊要多少</p>
                                                    </div>
                                                </div>
                                        </div>
                                      
                                        
                                </div>
                                <div class="ping-input">
                                    <h6>发表一下想法</h6><br/>
                                    <textarea name="" id="" cols="30" rows="10"></textarea>
                                    <a href="javascript:;" class="fa" data-v="<?php echo $v['id']; ?>">发表</a><br/>
                                    <a href="javascript:;" class="shou">收起</a>
                                </div>
                         </div>
                    </li>
                    <?php endforeach; ?>
                    
                </ul>

        </div>
        <div class="page">
            <ul class="page-num">
                <li class="iconfont iconjiantou_zuo activee "></li>
                <li>1</li>
                <li>2</li>
                <li>3</li>
                <li>4</li>
                <li>5</li>
                <li>6</li>
                <li>7</li>
                <li class="iconfont iconjiantou_you"></li>
            </ul>
        </div>   
        <div class="rig-box">
             <h4><?php echo $data['building_name']; ?></h4>
             <ul>
                <li><span>单价：  </span><?php echo $data['danjia']; ?>/m²</li>
                <li><span>地址：</span><?php echo $data['building_name']; ?></li>
                <li><span>楼盘类型：</span><?php echo $data['building_xingshi']; ?></li>
                <li><span>主力户型：</span><?php echo $data['humianji']; ?>m²</li>
                <li><span>开盘时间：</span><?php echo $data['kaitime']; ?></li>
             </ul>
             <div class="yu-zheng">
                 <div class="yu-zheng-left">
                     <h3>最新预售许可证： </h3>
                     <span><?php echo $data['yushou']; ?></span>
                 </div>
                 <a href="javascript:;" class="yushou">预售证详情</a>
             </div>
             <div class="tel-box">
                  <div class="tel">
                      <h5>400-8888-777</h5>
                      <span>致电售楼处了解更多信息</span>
                  </div>
                  <img src="/static/home/imgs/tel.png" alt="">
             </div>
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
              <li> <input type="text"  placeholder="输入您的手机查询详细楼盘资料"><a href="javascript:;" class="tel_ti">提交</a></li>
              <li><a href="javascript:;">售楼处电话：400-8888-777</a></li>
        </ul>
<p>Copyright © 2017 - 2022 杭州易得房网络有限公司有限公司版权所有 浙ICP备18057005号</p>


    </div>
</div>
<!--预售证详情模态框 -->
<div class="mo-baojia">
        <div class="baojia-success">
           <div class="biao">
                <h4>预售证详情</h4>
                <img src="/static/home/imgs/bai.png" alt="" class="close">
           </div>
           <div class="baojia-content">
                    <h3>世茂泰禾·中央广场</h3>
                    <p>向售楼处了解详细预售许可证详情</p>
                   <form action="">
                       <div class="telnum">
                            <input type="text" placeholder="请输入手机号" id="ytel">
                       </div>
                      <div class="name">
                            <input type="text" placeholder="请输入姓名" id="yname">
                      </div>
                      
                       <input type="button" value="确定" class="queren" data-v="<?php echo $data['id']; ?>">
                   </form>



           </div>
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
<script src="/static/home/js/jquery.min.js"></script>
<script>
     //头部点击
     $('.header-select a').click(function(){
                    $(this).addClass('activehead')
                    $(this).siblings().removeClass('activehead')
                })
      $('.page-num li').click(function(){
             $(this).addClass('activee')
             $(this).siblings().removeClass('activee')
      })

         //头部点击
         $('.header-select a').click(function(){
             $(this).addClass('activehead')
             $(this).siblings().removeClass('activehead')
        })
      //继续了解
      $('.liaojie').click(function(){
          $(this).css({
               display:'none'
          })
          $(this).parent().parent().next().css({
                display:'block'
        })
        var id=$(this).attr('data-v');
        var that=$(this);
        console.log(id);
        $.post(
            "<?php echo url('home/index/getding'); ?>",
            {'id':id},
            function(res){
                if(res.code==200){
                    var h='';
                    $.each(res.data,function(i,e){
                        h+=`
                        <div class="big-talk" data-aos="fade-right" data-aos-offset="200" data-aos-easing="ease-in-sine">
                                                <div class="left-talk">
                                                    <div class="head"><img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1564661814898&di=ea578fb4c9f4eecfcd814ac0869796c8&imgtype=0&src=http%3A%2F%2Fb-ssl.duitang.com%2Fuploads%2Fitem%2F201508%2F04%2F20150804211608_KLFV2.jpeg" alt=""></div>
                                                    <div class="talk-list">
                                                        <div class="talk-time"><span>${e.tel}</span> <i>${e.create_time}</i></div>   
                                                        <p>${e.con}</p>
                                                    </div>
                                                </div>
                                        </div>
                        `;
                        console.log(h);
                        that.parent().parent().next().find('.ping-list').html(h);
                    })
                }else{
                    alert(1)
                }
            }
        )
          
          $(this).parent().parent().next().prev().find('.con-rig').find('p').eq(0).css({'overflow':'initial'});
          $(this).parent().parent().next().prev().find('.con-rig').find('p').eq(0).css({'-webkit-line-clamp':'initial'});
      })


      $('.shou').click(function(){
    
        $(this).parent().parent().css({
              display:"none"
        })
        $(this).parent().parent().prev().find('.liaojie').css({
             display:'block'
        })
          console.log( );
          $(this).parent().parent().prev().find('.con-rig').find('p').eq(0).css({'overflow':'hidden'});
          $(this).parent().parent().next().find('.con-rig').find('p').eq(0).css({'-webkit-line-clamp':2});
      })
      //预售证详情
      $('.yushou').click(function(){
             $('.mo-baojia').css({
                   display:'block'
             })
      })
      $('.close').click(function(){
            $('.mo-baojia').css({
                   display:'none'
             })
      })
      $('.queren').on('click',function(){
            var id=$(this).attr('data-v');
            var phone=$('#ytel').val();
            var name=$('#yname').val();
            var pattern_phone = /^1[3-9][0-9]{9}$/;
				if (phone == '') {
					$('#ytel').attr('placeholder','手机号码不能为空');
					return;
				} else if (!pattern_phone.test(phone)) {
                    $('#ytel').val('');
					$('#ytel').attr('placeholder','手机号码不合法');
					return;
				} else {
					$('#ytel').attr('placeholder','');
				}
            $.post(
                "<?php echo url('home/index/port1'); ?>",
                {'bid':id,'name':name,'phone':phone},
                function(res){
                    if(res.code==200){
                        $('.mo-ti').show();
                        $('.mo-baojia').hide();
                    }
                }
            )
        })
        // 发表评论
        $('.fa').on('click',function(){
            var con=$(this).prev().val();
            var id=$(this).attr('data-v');
            $.post(
                "<?php echo url('home/index/dping'); ?>",
                {'did':id,'con':con},
                function(res){
                    if(res.code==200){
                        location.reload();
                    }else if(res.code==300){
                        $('.login').show();
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

