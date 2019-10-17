<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:77:"D:\phpstudy_pro\WWW\tp3\public/../application/admin\view\building\create.html";i:1566546235;s:68:"D:\phpstudy_pro\WWW\tp3\public/../application/admin\view\layout.html";i:1553218686;}*/ ?>
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

<!-- 右 -->
<div class="content">
    <div class="header">
        <h1 class="page-title">楼盘新增</h1>
    </div>

    <!-- add form -->
    <form action="<?php echo url('save'); ?>" method="post" id="tab" enctype="multipart/form-data">
        <ul class="nav nav-tabs">
            <li role="presentation" class="active"><a href="#basic" data-toggle="tab">基本信息</a></li>
            <li role="presentation"><a href="#desc" data-toggle="tab">楼盘描述</a></li>
            <li role="presentation"><a href="#attr" data-toggle="tab">楼盘属性</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade in active" id="basic">
                <div class="well">
                        <label>楼盘名称：</label>
                        <input type="text" name="building_name" value="" class="input-xlarge">
                        <label>启用状态：</label>
                        <select name="type" id="">
                            <?php foreach($type as $v): ?>
                            <option value="<?php echo $v; ?>" ><?php echo $v; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label>销售状态：</label>
                        <select name="building_xiaoshou" id="">
                            <?php foreach($xiaoshou as $v): ?>
                            <option value="<?php echo $v; ?>" ><?php echo $v; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label>价格等级：</label>
                        <select name="building_jiage" id="">
                            <?php foreach($jiage as $v): ?>
                            <option value="<?php echo $v; ?>" ><?php echo $v; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label>价格等级(总价)：</label>
                        <select name="zongjia" id="">
                            <?php foreach($zongjia as $v): ?>
                            <option value="<?php echo $v; ?>" ><?php echo $v; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label>楼盘价格：</label>
                        <select name="building_dengji" id="">
                            <?php foreach($dengji as $v): ?>
                            <option value="<?php echo $v; ?>" ><?php echo $v; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label>装修情况：</label>
                        <select name="building_zhuangxiu" id="">
                            <?php foreach($zhuangxiu as $v): ?>
                            <option value="<?php echo $v; ?>" ><?php echo $v; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label>预售证：</label>
                        <input type="text" name="yushou" value="" class="input-xlarge">
                        <label>楼盘地址：</label>
                        <input type="text" name="building_address" value="" class="input-xlarge">
                        <label>开发商：</label>
                        <input type="text" name="kaifa" value="" class="input-xlarge">
                        <label>物业公司：</label>
                        <input type="text" name="wuye" value="" class="input-xlarge">
                        <label>售楼处地址：</label>
                        <input type="text" name="shoulou" value="" class="input-xlarge">
                        <label>录入人员：</label>
                        <input type="text" name="building_people" value="" class="input-xlarge">
                        <label>楼盘户数：</label>
                        <input type="text" name="hushu" value="" class="input-xlarge">
                        <label>规划面积：</label>
                        <input type="text" name="guiji" value="" class="input-xlarge">
                        <label>建筑面积：</label>
                        <input type="text" name="jianji" value="" class="input-xlarge">
                        <label>家庭面积：</label>
                        <input type="text" name="humianji" value="" class="input-xlarge">
                        <label>单价：(元)</label>
                        <input type="text" name="danjia" value="" class="input-xlarge">
                        <label>总价：(万)</label>
                        <input type="text" name="zong" value="" class="input-xlarge">
                        <label>相似楼盘：(编号用,隔开)</label>
                        <input type="text" name="xiangsi" value="" class="input-xlarge">
                        <label>开盘时间：</label>
                        <input name="kaitime" type="date" value=""/>
                        <label>交房时间：</label>
                        <input name="jiaotime" type="date" value=""/>
                        <label>容积率：</label>
                        <input type="text" name="rongji" value="" class="input-xlarge">
                        <label>绿化率：</label>
                        <input type="text" name="lvhua" value="" class="input-xlarge">
                        <label>产权年限：</label>
                        <input type="text" name="channian" value="" class="input-xlarge">
                        <label>车位数：</label>
                        <input type="text" name="chewei" value="" class="input-xlarge">

                        <label>物业费：</label>
                        <input type="text" name="wufei" value="" class="input-xlarge">
                        <label>层高：</label>
                        <input type="text" name="cenggao" value="" class="input-xlarge">
                        <label>mapx：</label>
                        <input type="text" name="mapx" value="" class="input-xlarge">
                        <a href="https://lbs.amap.com/console/show/picker" target="_blank">点击这里</a>

                        <label>mapy：</label>
                        <input type="text" name="mapy" value="" class="input-xlarge">
                        
                        <label>有楼盘资料：</label>
                        <select name="building_ziliao" id="">
                            <?php foreach($ziliao as $v): ?>
                            <option value="<?php echo $v; ?>" ><?php echo $v; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label>是否上热搜：(不能超过4个)</label>
                        <select name="building_tejia" id="">
                            <?php foreach($tejia as $v): ?>
                            <option value="<?php echo $v; ?>" ><?php echo $v; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label>楼盘主图：</label>
                        <input type="file" name="building_logo" value="" class="input-xlarge">
                        
                </div>
            </div>
            <div class="tab-pane fade in" id="desc">
                    <div class="well">
                            <label>楼盘简介：</label>
                            <textarea name="introduce" style="width:800px;" class="input-xlarge"></textarea>
                        </div>
                        <div class="well">
                            <label>活动优惠：</label>
                            <textarea name="preferential" style="width:800px;"></textarea>
                        </div>
                        <div class="well">
                            <label>公交路线：(到楼盘)</label>
                            <textarea name="traffic" style="width:800px;"></textarea>
                        </div>
                        <div class="well">
                            <label>开发商介绍：(1)</label>
                            <textarea name="kone_into" style="width:800px;"></textarea>
                        </div>
                        <div class="well">
                            <label>开发商介绍：(2)</label>
                            <textarea name="ktwo_into" style="width:800px;"></textarea>
                        </div>
                        <div class="well">
                            <label>优势介绍：(1)</label>
                            <textarea name="you_one" style="width:800px;"></textarea>
                        </div>
                        <div class="well">
                            <label>优势介绍：(2)</label>
                            <textarea name="you_two" style="width:800px;"></textarea>
                        </div>
                        <div class="well">
                            <label>优势介绍：(3)</label>
                            <textarea name="you_thre" style="width:800px;"></textarea>
                        </div>
                        <div class="well">
                            <label>精品房源特色：</label>
                            <textarea name="fytese" style="width:800px;"></textarea>
                        </div>
                        <div class="well">
                            <label>成熟商业体系：</label>
                            <textarea name="sytixi" style="width:800px;"></textarea>
                        </div>
                        <div class="well">
                            <label>高端物业管理：</label>
                            <textarea name="wlguanli" style="width:800px;"></textarea>
                        </div>
            </div>
            <div class="tab-pane fade in" id="attr">
                    <div class="well">
                        <label>地铁：</label>
                        <?php foreach($ditie as $v): ?>
                        
                        <input type="checkbox" name="building_ditie[]" value="<?php echo $v; ?>"><?php echo $v; endforeach; ?>
                        
                        <label>户型：</label>
                        <?php foreach($huxing as $v): ?>
                        
                        <input type="checkbox" name="building_huxing[]" value="<?php echo $v; ?>"><?php echo $v; endforeach; ?>
                        <label>建筑形式：</label>
                        <?php foreach($xingshi as $v): ?>
                        
                        <input type="checkbox" name="building_xingshi[]" value="<?php echo $v; ?>"><?php echo $v; endforeach; ?>
                        <label>楼盘特色：</label>
                        <?php foreach($tese as $v): ?>
                        
                        <input type="checkbox" name="building_tese[]" value="<?php echo $v; ?>"><?php echo $v; endforeach; ?>
                    </div>
                    <div class="well">
                        <label>楼盘分区：</label>
                        <select name="" class="input-xlarge" id="cate_one">
                            <option value="">请选择城市</option>
                            <?php foreach($list as $v): ?>
                            <option value="<?php echo $v['id']; ?>"><?php echo $v['area_name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <select name="cate_id" class="input-xlarge" id="cate_two">
                            <option value="">请选择区域</option>
                        </select>
                        <label>关键字：</label>
                        <input type="text" name="keys" value="" class="input-xlarge">   
                        <label>400转接：</label>
                        <input type="text" name="transfer" value="" class="input-xlarge">   
                    </div>
            </div>
            <button class="btn btn-primary" type="submit">保存</button>
        </div>
    </form>

    <script type="text/javascript">
        $(function () {
           
            // 多级联动
            $('#cate_one').change(function () {
                $('#cate_two').html('<option value="">请选择分区</option>');
                $('#cate_three').html('<option value="">请选择板块</option>');
                var id = $(this).val();
                if (id == '') {
                    return;
                }
                var data = {
                    'id': id
                };
                $.ajax({
                    'url': '<?php echo url("admin/category/getSubCate"); ?>',
                    'type': 'post',
                    'data': data,
                    'dataType': 'json',
                    'success': function (res) {
                        if (res.data != 10000) {
                            var html = '<option value="">请选择分区</option>';
                            var data = res.data;
                            $.each(data, function (k, v) {
                                html += '<option value="' + v.id + '">' + v.area_name + '</option>';
                            })
                            $('#cate_two').html(html);
                        }

                    }
                })
            });
            
            // 实例化编辑器
            UE.getEditor('editor');
            // 多文件上传
            $('.add').click(function () {
                var add_div = '<div>[<a href="javascript:void(0);" class="sub">-</a>]商品图片：<input type="file" name="goods_pics[]" value="" class="input-xlarge goods_pics"><img height="50" width="50" /></div>';
                $(this).parent().parent().append(add_div);
            });
            $('.sub').live('click', function () {
                $(this).parent().remove();
            });
            $('input:file').live('change', function () {
                var $that = $(this).next();
                //获取input file的files文件数组;
                //$('.goods_pics')获取的是jQuery对象，.get(0)转为原生对象;
                //这边默认只能选一个，但是存放形式仍然是数组，所以取第一个元素使用[0];
                var file = $('.goods_pics').get(0).files[0];
                //创建用来读取此文件的对象
                var reader = new FileReader();
                // 使用该对象读取file文件
                reader.readAsDataURL(file);
                // 读取成功后执行的方法函数
                reader.onload = function (e) {
                    //读取成功后返回的一个参数e，整个的一个进度事件
                    // console.log(e.target.result);
                    //选择所要显示图片的img，要赋值给img的src就是e中target下result里面
                    //的base64编码格式的地址
                    // console.log($that);
                    // $that.get(0).src = e.target.result;
                }

            })
            $('select[name=type_id]').change(function () {
                var type_id = $(this).val();
                if (type_id == '') {
                    return;
                }
                // 获取类型下的属性名称信息
                var data = { 'type_id': type_id };
                $.ajax({
                    'url': "<?php echo url('admin/attribute/getattr'); ?>",
                    'type': 'post',
                    'data': data,
                    'dataType': 'json',
                    'success': function (res) {
                        if (res.code != 10000) {
                            alert(res.msg);
                            return;
                        }
                        var attrs = res.data;
                        var str = '';
                        $.each(attrs, function (i, v) {
                            str += "<label>" + v.attr_name + ":</label>";
                            if (v.attr_input_type == 0) {
                                str += '<input type="text" name="attr_value[' + v.id + '][]" value="" class="input-xlarge">'
                            } else if (v.attr_input_type == 1) {
                                str += '<select name="attr_value[' + v.id + '][]">';
                                $.each(v.attr_values, function (index, value) {
                                    str += '<option value="' + value + '">' + value + '</option>';
                                })
                                str += '</select>';
                            } else {
                                $.each(v.attr_values, function (index, value) {
                                    str += '<input type="checkbox" name="attr_value[' + v.id + '][]" value="' + value + '" >' + value;
                                })
                            }
                        })
                        $('#attrs').html(str);
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