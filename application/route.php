<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;
Route::rule('test','api/test/index');
// Route::rule('/:id','home/index/index');

Route::rule('/index/:id','home/index/index');
Route::rule('/lian/:id','home/index/lian');
Route::rule('/dong/:id','home/index/dong');
Route::rule('/photo/:id','home/index/photo');
Route::rule('/introduce/:id','home/index/introduce');
Route::rule('/num','home/index/num');
Route::rule('/sping','home/index/sping');
Route::rule('/login','home/index/login');
Route::rule('/log','home/index/log');
Route::rule('/tel','home/index/tel');




Route::rule('/mine/:id','home/mine/index');
Route::rule('/m/login/:id','home/mine/login');
Route::rule('/m/ping/:id','home/mine/ping');
Route::rule('/m/detail/:id','home/mine/detail');
Route::rule('/m/hufen/:id','home/mine/hufen');
Route::rule('/m/dongtail/:id','home/mine/dongtail');

