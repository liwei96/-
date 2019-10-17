<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:71:"D:\phpstudy_pro\WWW\tp3\public/../application/admin\view\news\edit.html";i:1566120569;s:68:"D:\phpstudy_pro\WWW\tp3\public/../application/admin\view\layout.html";i:1553218686;}*/ ?>
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


    <style>
    .well{
        position:relative;
    }
    .btn{
        position: absolute;
        top:50px;
        right:210px;
    }
</style> 


<!-- 右 -->
<div class="content">
    <div class="header">
        <h1 class="page-title">楼盘列表</h1>
    </div>

    <div class="well">
        <!-- search button -->
        <form action="<?php echo url('admin/news/update',['id'=>$data['id']]); ?>" method="post" class="form-search"  enctype="multipart/form-data">
            <label>楼盘简介：</label>
            
	<input type="hidden" name="bid" value="<?php echo $data['bid']; ?>">
            <textarea name="introduce" style="width:800px;height:100px;" class="input-xlarge"><?php echo $data['introduce']; ?></textarea>
            <input type="file" name="dong" value="" class="input-xlarge">
            <img id="im" src="<?php echo $data['img']; ?>" alt="" data-v="<?php echo $data['id']; ?>">
            <button type="submit" class="btn">提交</button>
        </form>
    </div>
   <script>
       $(document).ready(function(){
           $('#im').on('click',function(){
               var src=$(this).attr('src');
               var id=$(this).attr('data-v');
               $.post(
                   "<?php echo url('admin/news/delimg'); ?>",
                   {'src':src,'id':id},
                   function(res){
                       if(res.code==200){
                           $('#im').hide();
                       }
                   }
               )
           })
       })
   </script>

    <!-- footer -->
    <footer>
        <hr>
        <p>© 2017 <a href="javascript:void(0);" target="_blank">ADMIN</a></p>
    </footer>
    </div>
</body>

</html>