<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"D:\phpstudy_pro\WWW\tp3\public/../application/home\view\mine\zhou.html";i:1566888990;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <link rel="stylesheet" href="/static/home/csss/common/common.css">
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_1329849_7za7eo8yzvj.css">
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_1350331_95tz9eyhqij.css">
    <link rel="stylesheet" href="http://cache.amap.com/lbs/static/main1119.css"/>
    <link rel="stylesheet" href="/static/home/csss/neargh.css">
    <link rel="stylesheet" href="/static/home/csss/common/footer.css">
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_1367531_3t0litim5l6.css">
    <title>周边规划</title>
    <script type="text/javascript" src="https://webapi.amap.com/maps?v=1.4.14&key=729ac4d779c7e625bc11bd5ba3ff3112"></script>
    <script type="text/javascript" src="https://cache.amap.com/lbs/static/addToolbar.js"></script>
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
            <span class="iconfont icon-caidan" id="clickicon"></span>
    </div>

  <header class="hea">
        <ul>
                <li> <a href="<?php echo url('home/mine/index',['id'=>$data['id']]); ?>" >首页</a></li>
                <li class="active"> <a href="<?php echo url('home/mine/intro',['id'=>$data['id']]); ?>" >项目介绍</a></li>
                <li>  <a href="<?php echo url('home/mine/dong',['id'=>$data['id']]); ?>">楼盘动态</a></li>
                <li> <a href="<?php echo url('home/mine/potos',['id'=>$data['id']]); ?>">楼盘图册</a></li>
                <li><a href="<?php echo url('home/mine/lian',['id'=>$data['id']]); ?>">联系我们</a></li>
          </ul>
  </header>

  <div class="more">
        <span class="iconfont iconjiantouzuo"></span>
        <h2>周边规划</h2>
    </div>
 <!--周边规划-->
  <div class="nearg">
        <div id="container"></div>
        <div id="list">
            <ul>
                <li class="active">交通</li>
                <li >教育</li>
                <li >医疗</li>
                <li >购物</li>
                <li >生活</li>
                <li >娱乐</li>
            </ul>
        </div>
         <div class="jiaolist">

         </div>
  </div>

<div id="panel" style="display:none;"></div>



    <!--footer-->
<!-- <div class="footer pos">
        <ul>
            <li><a href="javascript:;">首页</a></li>
            <li><a href="javascript:;">项目介绍</a></li>
            <li><a href="javascript:;">楼盘动态</a></li>
            <li><a href="javascript:;">楼盘图册</a></li>
            <li><a href="javascript:;">联系我们</a></li>
        </ul>
        <p>Copyright © 2017 - 2022 yidefang.com 浙ICP备18057005号</p>
    </div> -->

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
             <h3><?php echo $data['building_name']; ?></h3>
             <p>一键预约看房免费小车上门接送</p>
             <form action="">
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



    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <script src="/static/home/js/yukan.js"></script>
    <script type="text/javascript">
         $('header ul li').click(function(){
      console.log($(this));
            $(this).addClass('active');
            $(this).siblings().removeClass('active');
       })

//高德地图导航
        var map = new AMap.Map("container", {
            resizeEnable: true,
            zoom:11
        });
        function addMarker() {
            marker = new AMap.Marker({
                icon: "https://a.amap.com/jsapi_demos/static/demo-center/icons/poi-marker-default.png",
                position: [<?php echo $data['mapx']; ?>,<?php echo $data['mapy']; ?>],
                offset: new AMap.Pixel(-13, -30)
            });
            marker.setMap(map);
        }
        addMarker();
        AMap.service(["AMap.PlaceSearch"], function() {
            //构造地点查询类
            var placeSearch = new AMap.PlaceSearch({ 
                pageSize: 10, // 单页显示结果条数
                pageIndex: 1, // 页码
                city: "杭州", // 兴趣点城市
                citylimit: true,  //是否强制限制在设置的城市内搜索
                map: map, // 展现结果的地图实例
                panel: "panel", // 结果列表将在此容器中进行展示。
                autoFitView: true // 是否自动调整地图视野使绘制的 Marker点都处于视口的可见范围
            });
            
            var cpoint = [<?php echo $data['mapx']; ?>,<?php echo $data['mapy']; ?>]; //中心点坐标
            var p2=[120.144496,30.318836];
            var s=AMap.GeometryUtil.distance(cpoint, p2);
            console.log(s);
            placeSearch.searchNearBy('地铁', cpoint, 2000, function(status, result) {
                        var ditie='<p class="m-type">地铁</p>';
                        var jiaolist=result.poiList.pois;
                        // console.log(jiaolist)
                                if(jiaolist.length>0){
                                    $(jiaolist).each(function(index,item){
                                        ditie+=` 
                                        <div class="n-di">
                                            <div class="m-te">
                                                <h5 class="m-name">${item.name}</h5>
                                                <p class="m-ju"><img src="/static/home/img/ding.png" alt=""> <span>${item.distance}m</span></p>
                                           </div>
                                           <p class="n-xian">${item.address}</p>
                                        </div>
                                        `
                                    })
                                }else{
                                        
                                }
                                // console.log(ditie);
                                $('.jiaolist').html(ditie); 
                    })
                    placeSearch.searchNearBy('公交', cpoint, 2000, function(status, result) {
                        var ht=$('.jiaolist').html();
                        // console.log(ht);
                        var html='<p class="m-type">公交</p>';
                        var bus=result.poiList.pois;
                        // console.log(bus)
                                if(bus.length>0){
                                    $(bus).each(function(index,item){
                                        html+=`
                                        <div class="n-di"> 
                                                <div class="m-te">
                                                    <h5 class="m-name">${item.name}</h5>
                                                    <p class="m-ju"><img src="/static/home/img/ding.png" alt=""> <span>${item.distance}m</span></p>
                                                </div>
                                                <p class="n-xian">${item.address}</p>
                                        </div>
                                        `
                                    })
                                }else{
                                        
                                }
                              ht+=html
                            //   console.log(ht);
                                $('.jiaolist').html(ht); 
                    })


            function moren(){
                placeSearch.searchNearBy('购物', cpoint, 2000, function(status, result) {
                var ht='<p class="m-type">购物</p>';
                // console.log(ht)
                $.each(result.poiList.pois,function(i,e){
                    // console.log(e);
                    var p2=[e.location.lng,e.location.lat];
                    var s=AMap.GeometryUtil.distance(cpoint, p2)/1000;
                    s=s.toFixed(1);
                    ht+=`
                    <div class="m-te marg">
                        <h5 class="m-name">${e.name}</h5>
                        <p class="m-ju"><img src="/static/home/img/ding.png" alt=""><span>${s}m<span></p>
                    </div>
                    `;
                })
                $('.jiaolist').html(ht);
            });
            placeSearch.searchNearBy('美食', cpoint, 2000, function(status, result) {
                var html=$('.jiaolist').html();
                var ht='<p class="m-type">美食</p>';
                $.each(result.poiList.pois,function(i,e){
                    // console.log(e);
                    var p2=[e.location.lng,e.location.lat];
                    var s=AMap.GeometryUtil.distance(cpoint, p2)/1000;
                    s=s.toFixed(1);
                    ht+=`
                    <div class="m-te marg">
                        <h5 class="m-name">${e.name}</h5>
                        <p class="m-ju"><img src="/static/home/img/ding.png" alt=""><span>${s}m</span></p>
                    </div>
                    `;
                })
                html+=ht;
                $('.jiaolist').html(html);
            });
            placeSearch.searchNearBy('超市', cpoint, 2000, function(status, result) {
                var html=$('.jiaolist').html();
                var ht='<p class="m-type">超市</p>';
                $.each(result.poiList.pois,function(i,e){
                    // console.log(e);
                    var p2=[e.location.lng,e.location.lat];
                    var s=AMap.GeometryUtil.distance(cpoint, p2)/1000;
                    s=s.toFixed(1);
                    ht+=`
                    <div class="m-te marg">
                        <h5 class="m-name">${e.name}</h5>
                        <p class="m-ju"><img src="/static/home/img/ding.png" alt=""><span>${s}m</span></p>
                    </div>
                    `;
                })
                html+=ht;
                $('.jiaolist').html(html);
            });
            }

            $(document).ready(function(){
            $('#list ul li').on('click',function(){
               $(this).addClass('active');
               $(this).siblings().removeClass('active');
                //  console.log($(this).html());
                 var type=$(this).html();
                 if(type=="交通"){
                    placeSearch.searchNearBy('地铁', cpoint, 2000, function(status, result) {
                        var ditie='<p class="m-type">地铁</p>';
                        var jiaolist=result.poiList.pois;
                        // console.log(jiaolist)
                                if(jiaolist.length>0){
                                    $(jiaolist).each(function(index,item){
                                        ditie+=` 
                                        <div class="n-di">
                                            <div class="m-te">
                                                <h5 class="m-name">${item.name}</h5>
                                                <p class="m-ju"><img src="/static/home/img/ding.png" alt=""> <span>${item.distance}m</span></p>
                                           </div>
                                           <p class="n-xian">${item.address}</p>
                                        </div>
                                        `
                                    })
                                }else{
                                        
                                }
                                // console.log(ditie);
                                $('.jiaolist').html(ditie); 
                    })
                    placeSearch.searchNearBy('公交', cpoint, 2000, function(status, result) {
                        var ht=$('.jiaolist').html();
                        // console.log(ht);
                        var html='<p class="m-type">公交</p>';
                        var bus=result.poiList.pois;
                        // console.log(bus)
                                if(bus.length>0){
                                    $(bus).each(function(index,item){
                                        html+=`
                                        <div class="n-di"> 
                                                <div class="m-te">
                                                    <h5 class="m-name">${item.name}</h5>
                                                    <p class="m-ju"><img src="/static/home/img/ding.png" alt=""> <span>${item.distance}m</span></p>
                                                </div>
                                                <p class="n-xian">${item.address}</p>
                                        </div>
                                        `
                                    })
                                }else{
                                        
                                }
                              ht+=html
                            //   console.log(ht);
                                $('.jiaolist').html(ht); 
                    })
                 }else if(type=="生活"){
                     moren();
                 }else if(type=="教育"){
                        placeSearch.searchNearBy(type, cpoint, 2000, function(status, result) {
                            var html='';
                            var jiao=result.poiList.pois;
                            // console.log(jiao)
                                    if(jiao.length>0){
                                        $(jiao).each(function(index,item){
                                            html+=` 
                                            <div class="m-te marg">
                                                <h5 class="m-name">${item.name}</h5>
                                                <p class="m-ju"><img src="/static/home/img/ding.png" alt=""><span>${item.distance}m</span></p>
                                            </div>`
                                        })
                                        // console.log(html)
                                    }else{
                                            
                                    }
                                    $('.jiaolist').html(html); 
                        })
                        
                 }else if(type=="医疗"){
                    placeSearch.searchNearBy('医院', cpoint, 2000, function(status, result) {
                            var html='';
                            var yi=result.poiList.pois;
                            // console.log(yi)
                                    if(yi.length>0){
                                        $(yi).each(function(index,item){
                                            html+=` 
                                            <div class="m-te marg">
                                                <h5 class="m-name">${item.name}</h5>
                                                <p class="m-ju"><img src="/static/home/img/ding.png" alt=""><span>${item.distance}m</span></p>
                                            </div>`
                                        })
                                    }else{
                                            
                                    }
                                    $('.jiaolist').html(html); 
                        })
                      
                 }else if(type=="购物"){
                    placeSearch.searchNearBy(type, cpoint, 2000, function(status, result) {
                            var html='';
                            var gou=result.poiList.pois;
                            // console.log(gou)
                                    if(gou.length>0){
                                        $(gou).each(function(index,item){
                                            html+=` 
                                            <div class="m-te marg">
                                                <h5 class="m-name">${item.name}</h5>
                                                <p class="m-ju"><img src="/static/home/img/ding.png" alt=""><span>${item.distance}m</span></p>
                                            </div>`
                                        })
                                    }else{
                                            
                                    }
                                    $('.jiaolist').html(html); 
                        })
                       
                 }else if(type=="娱乐"){
                    placeSearch.searchNearBy(type, cpoint, 2000, function(status, result) {
                            var html='';
                            var yu=result.poiList.pois;
                                    if(yu.length>0){
                                        $(yu).each(function(index,item){
                                            html+=` 
                                            <div class="m-te marg">
                                                <h5 class="m-name">${item.name}</h5>
                                                <p class="m-ju"><img src="/static/home/img/ding.png" alt=""><span>${item.distance}m</span></p>
                                            </div>`
                                        })
                                    }else{
                                            
                                    }
                                    $('.jiaolist').html(html); 
                        })
                 }
            });
        })
        });
        
    </script>
<script>
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


//菜单的显示与隐藏
window.isshow=1;
$('#clickicon').click(function(){
      if( window.isshow==1){
        $('header').slideUp("fast");
        window.isshow=2;
        $('.more').css({
             marginTop:'0.8rem'
        })
      }else if( window.isshow==2){
        $('header').slideDown("fast");
        window.isshow=1;
        $('.more').css({
             marginTop:'1.7rem'
        })
      }
  }) 

// 
$('.iconjiantouzuo').on('click',function(){
    console.log(1);
    window.history.go(-1);
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