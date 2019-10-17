<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:79:"D:\phpstudy_pro\WWW\tp3\public/../application/admin\view\building\editimgs.html";i:1566196404;s:68:"D:\phpstudy_pro\WWW\tp3\public/../application/admin\view\layout.html";i:1553218686;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>后台管理系统</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="/static/admin/css/main.css" rel="stylesheet" type="text/css" />
    <link href="/static/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/static/admin/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
    <script src="/static/admin/js/jquery-1.8.1.min.js"></script>
    <script src="/static/admin/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- 上 -->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container-fluid">
                <ul class="nav pull-right">
                    <li id="fat-menu" class="dropdown">
                        <a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-user icon-white"></i> <?php echo session('userinfo.username'); ?>
                            <i class="icon-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="<?php echo url('admin/manager/modifyPassword',['id'=>session('userinfo.id')]); ?>">修改密码</a></li>
                            <li class="divider"></li>
                            <li><a tabindex="-1" href="<?php echo url('admin/login/logout'); ?>">安全退出</a></li>
                        </ul>
                    </li>
                </ul>
                <a class="brand" href="<?php echo url('admin/goods/index'); ?>"><span class="first">后台管理系统</span></a>
                <ul class="nav">
                    <li class="active"><a href="javascript:void(0);">首页</a></li>
                    <li><a href="javascript:void(0);">系统管理</a></li>
                    <li><a href="<?php echo url('admin/auth/index'); ?>">权限管理</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- 左 -->
    <div class="sidebar-nav">
        <!-- 注意在同一页面上的命名冲突 -->
        <?php foreach($top_nav as $k => $top_vv): ?>
        <a href="#error-menu <?php echo $k; ?>" class="nav-header collapsed" data-toggle="collapse"><i class="icon-exclamation-sign"></i><?php echo $top_vv['auth_name']; ?></a>
        <ul id="error-menu <?php echo $k; ?>" class="nav nav-list collapse in">
            <?php foreach($second_nav as $second_vv): if($second_vv['pid'] == $top_vv['id']): ?>
            <li><a href="<?php echo url($second_vv['auth_c'].'/'.$second_vv['auth_a']); ?>"><?php echo $second_vv['auth_name']; ?></a></li>
            <?php endif; endforeach; ?>
        </ul>
        <?php endforeach; ?>
    </div>


    <script type="text/javascript" charset="utf-8" src="__STATIC__/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="__STATIC__/ueditor/ueditor.all.min.js"></script>
<script type="text/javascript" charset="utf-8" src="__STATIC__/ueditor/lang/zh-cn/zh-cn.js"></script>
<style>
    .content{
        top:-18px;
    }
</style>
!-- 右 -->
<div class="content"> 
    <div class="header">
        <h1 class="page-title">相册编辑</h1>
    </div>
    <!-- edit form -->
    <form action="<?php echo url('saveimgs'); ?>" method="post" id="tab" enctype="multipart/form-data">
        <input type="hidden" name="bid" value="<?php echo $id; ?>">
        <ul class="nav nav-tabs">
            <li role="presentation" class="active"><a href="#basic" data-toggle="tab">效果图</a></li>
            <li role="presentation"><a href="#desc" data-toggle="tab">实景图</a></li>
            <li role="presentation"><a href="#attr" data-toggle="tab">样板图</a></li>
            <li role="presentation"><a href="#pei" data-toggle="tab">配套图</a></li>
            <li role="presentation"><a href="#jiao" data-toggle="tab">交通图</a></li>
            <li role="presentation"><a href="#hu" data-toggle="tab">户型图</a></li>
            <li role="presentation"><a href="#zhu" data-toggle="tab">主页图片</a></li>
            <li role="presentation"><a href="#tu" data-toggle="tab">项目介绍图片</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade in active" id="basic">
                <div class="well">
                    <div>[<a href="javascript:void(0);" class="addx">+</a>]图片：<input type="file"
                            name="x_pics[]" value="" class="input-xlarge"></div>
                </div>
                <div class="well">
                    <?php foreach($x_imgs as $x): if($x['x_small']): ?>
                    <div style="margin: 10px 0;width:100%"><img src="<?php echo $x['x_small']; ?>" alt=""
                            style="width:150px"><button pics_id="<?php echo $x['id']; ?>" pics_type="x" class="btn-danger delete_pics"
                            style="float:right" type="button">删除</button></div>
                            <?php endif; endforeach; ?>
                </div>
                </div>
                 <div class="tab-pane fade in" id="desc">
                    <div class="well">
                        <div>[<a href="javascript:void(0);" class="adds">+</a>]图片：<input type="file"
                                name="s_pics[]" value="" class="input-xlarge"></div>
                    </div>
                    <div class="well">
                        <?php foreach($s_imgs as $s): if($s['s_small']): ?>
                        <div style="margin: 10px 0;width:100%"><img src="<?php echo $s['s_small']; ?>" alt=""
                                style="width:150px"><button pics_id="<?php echo $s['id']; ?>" pics_type="s" class="btn-danger delete_pics"
                                style="float:right" type="button">删除</button></div>
                                <?php endif; endforeach; ?>
                    </div>
                </div>
                <div class="tab-pane fade in" id="attr">
                    <div class="well">
                        <div>[<a href="javascript:void(0);" class="addy">+</a>]图片：<input type="file"
                                name="y_pics[]" value="" class="input-xlarge"></div>
                    </div>
                    <div class="well">
                        <?php foreach($y_imgs as $y): if($y['y_small']): ?>
                        <div style="margin: 10px 0;width:100%"><img src="<?php echo $y['y_small']; ?>" alt=""
                                style="width:150px"><button pics_id="<?php echo $y['id']; ?>" pics_type="y" class="btn-danger delete_pics"
                                style="float:right" type="button">删除</button></div>
                                <?php endif; endforeach; ?>
                    </div>
                        
                </div>
                <div class="tab-pane fade in" id="pei">
                        <div class="well">
                                <div>[<a href="javascript:void(0);" class="addp">+</a>]图片：<input type="file"
                                        name="p_pics[]" value="" class="input-xlarge"></div>
                            </div>
                    <div class="well">
                        <?php foreach($p_imgs as $p): if($p['p_small']): ?>
                        <div style="margin: 10px 0;width:100%"><img src="<?php echo $p['p_small']; ?>" alt=""
                                style="width:150px"><button pics_id="<?php echo $p['id']; ?>" pics_type="p" class="btn-danger delete_pics"
                                style="float:right" type="button">删除</button></div>
                                <?php endif; endforeach; ?>
                    </div>
                    
               </div>
               <div class="tab-pane fade in" id="jiao">
                    <div class="well">
                            <div>[<a href="javascript:void(0);" class="addj">+</a>]图片：<input type="file"
                                    name="j_pics[]" value="" class="input-xlarge"></div>
                        </div>
                <div class="well">
                    <?php foreach($j_imgs as $j): if($j['j_small']): ?>
                    <div style="margin: 10px 0;width:100%"><img src="<?php echo $j['j_small']; ?>" alt=""
                            style="width:150px"><button pics_id="<?php echo $j['id']; ?>" pics_type="j" class="btn-danger delete_pics"
                            style="float:right" type="button">删除</button></div>
                            <?php endif; endforeach; ?>
                </div>
                
                 </div>
                 <div class="tab-pane fade in" id="hu">
                    <div class="well">
                        <div>[<a href="javascript:void(0);" class="addhu">+</a>]图片：<input type="file"
                                name="h_pics[]" value="" class="input-xlarge">室厅：<input type="text" name="content[]" value="">     面积:<input type="text" name="mian[]" value=""> 价钱:<input type="text" name="jia[]" value="">
                                几室:<input type="text" name="ji[]" value=""> 类型:<input type="text" name="lei[]" value="">   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;分析:<input type="text" name="fen[]" value="" style="width:800px">
                            </div>
                    </div>
                    <div class="well">
                        <?php foreach($h_imgs as $h): if($h['h_small']): ?>
                        <div style="margin: 10px 0;width:100%"><img src="<?php echo $h['h_small']; ?>" alt=""
                                style="width:150px">
                                    <input type="hidden" name="bid" value="<?php echo $id; ?>">
                                室厅：<input type="text" name="content[]" value="<?php echo $h['content']; ?>">     
                                面积:<input type="text" name="mian[]" value="<?php echo $h['mian']; ?>">
                                价钱:<input type="text" name="jia[]" value="<?php echo $h['jia']; ?>">
                                几室:<input type="text" name="num[]" value="<?php echo $h['ji']; ?>"> 类型:<input type="text" name="lei[]" value="<?php echo $h['lei']; ?>">   <br>分析:<input type="text" name="fen[]" value="<?php echo $h['fen']; ?>" style="width:800px">
                                <button pics_id="<?php echo $h['id']; ?>" id="h" pics_type="h" class="btn-danger delete_pics"
                                style="float:right" type="button">删除</button></div>
                                <?php endif; endforeach; ?>
                    </div>
                    
                 </div>
                 <div class="tab-pane fade in" id="zhu">
                    <div class="well">
                        <div>[<a href="javascript:void(0);" class="addz">+</a>]图片：<input type="file"
                                name="z_pics[]" value="" class="input-xlarge"></div>
                    </div>
                    <div class="well">
                        <?php foreach($z_imgs as $z): if($z['img']): ?>
                        <div style="margin: 10px 0;width:100%"><img src="<?php echo $z['img']; ?>" alt=""
                                style="width:150px"><button pics_id="<?php echo $z['id']; ?>" pics_type="z" class="btn-danger delete_pics"
                                style="float:right" type="button">删除</button></div>
                                <?php endif; endforeach; ?>
                    </div>
                </div>
                <div class="tab-pane fade in" id="tu">
                    <div class="well">
                        <div>[<a href="javascript:void(0);" class="addt">+</a>]图片：<input type="file"
                                name="t_pics[]" value="" class="input-xlarge"></div>
                    </div>
                    <div class="well">
                        <?php foreach($t_imgs as $t): if($t['img']): ?>
                        <div style="margin: 10px 0;width:100%"><img src="<?php echo $t['img']; ?>" alt=""
                                style="width:150px"><button pics_id="<?php echo $t['id']; ?>" pics_type="t" class="btn-danger delete_pics"
                                style="float:right" type="button">删除</button></div>
                                <?php endif; endforeach; ?>
                    </div>
                </div>
                    <button class="btn btn-primary" type="submit">保存</button>
                </div>
    </form>

    <script type="text/javascript">
        $(function () {
            $('.addhu').click(function () {
                var add_div = '<div>[<a href="javascript:void(0);" class="sub">-</a>]楼盘图片：<input type="file" name="h_pics[]" value="" class="input-xlarge">室厅：<input type="text" name="content[]" value="">     面积:<input type="text" name="mian[]" value=""> 价钱:<input type="text" name="jia[]" value=""> 几室:<input type="text" name="num[]" value=""> 类型:<input type="text" name="lei[]" value="">   <br>分析:<input type="text" name="fen[]" value="" style="width:800px"></div>';
                $(this).parent().parent().append(add_div);
            });
            $('.addj').click(function () {
                var add_div = '<div>[<a href="javascript:void(0);" class="sub">-</a>]楼盘图片：<input type="file" name="j_pics[]" value="" class="input-xlarge"> </div>';
                $(this).parent().parent().append(add_div);
            });
            $('.addp').click(function () {
                var add_div = '<div>[<a href="javascript:void(0);" class="sub">-</a>]楼盘图片：<input type="file" name="p_pics[]" value="" class="input-xlarge"> </div>';
                $(this).parent().parent().append(add_div);
            });
            $('.addy').click(function () {
                var add_div = '<div>[<a href="javascript:void(0);" class="sub">-</a>]楼盘图片：<input type="file" name="y_pics[]" value="" class="input-xlarge"> </div>';
                $(this).parent().parent().append(add_div);
            });
            $('.adds').click(function () {
                var add_div = '<div>[<a href="javascript:void(0);" class="sub">-</a>]楼盘图片：<input type="file" name="s_pics[]" value="" class="input-xlarge"> </div>';
                $(this).parent().parent().append(add_div);
            });
            $('.addx').click(function () {
                var add_div = '<div>[<a href="javascript:void(0);" class="sub">-</a>]楼盘图片：<input type="file" name="x_pics[]" value="" class="input-xlarge"> </div>';
                $(this).parent().parent().append(add_div);
            });
            $('.addz').click(function () {
                var add_div = '<div>[<a href="javascript:void(0);" class="sub">-</a>]楼盘图片：<input type="file" name="z_pics[]" value="" class="input-xlarge"> </div>';
                $(this).parent().parent().append(add_div);
            });
            $('.addt').click(function () {
                var add_div = '<div>[<a href="javascript:void(0);" class="sub">-</a>]楼盘图片：<input type="file" name="t_pics[]" value="" class="input-xlarge"> </div>';
                $(this).parent().parent().append(add_div);
            });
            $('.sub').live('click', function () {
                $(this).parent().remove();
            });
            
            $('.delete_pics').click(function () {
                var id = $(this).attr('pics_id');
                var type = $(this).attr('pics_type');
                var data = {
                    'id': id,
                    'type':type
                }
                var that = $(this);
                $.ajax({
                    'url': "<?php echo url('admin/building/delpics'); ?>",
                    'type': 'post',
                    'data': data,
                    'dataType': 'json',
                    'success': function (res) {
                        if (res.code == 10000) {
                            alert(res.msg);
                        } else {
                            that.parent().remove();
                        }
                    }
                })
            })
            
        });
    </script>

    <!-- footer -->
    <footer>
        <hr>
        <p>© 2017 <a href="javascript:void(0);" target="_blank">ADMIN</a></p>
    </footer>
    </div>
</body>

</html>