<?php

/**
 * 后台管理路由
*/

Route::get('/admin', function () {
    return view('auth.login');
});

Auth::routes();

Route::group(['middleware'=>'auth','namespace'=>'Admin','prefix'=>'admin'],function(){
    Route::get('/', 'IndexController@index');  //首页

    Route::resource('image','ImageController');

    Route::get('sch/data','SchoolController@Data')->middleware('admin');
    Route::resource('school','SchoolController')->middleware('admin');
    Route::any('editschool','SchoolController@EditSchool');

    Route::resource('user','UserController')->middleware('admin');
    Route::get('use/data','UserController@Data')->middleware('admin');
    Route::resource('sign','SignController');
    Route::resource('new','NewsController');

    Route::get('img/data','ImageController@Data');

    Route::any('use/one','UserController@One');
    Route::get('sg/data','SignController@Data');
    Route::post('sg/export', 'SignController@Export');
    Route::get('nw/data','NewsController@Data');

    Route::get('test','ImageController@test');
    Route::get('imgstatus','ImageController@HandleStatus');
    Route::get('nstatus','NewsController@HandleStatus');
});

/**
 * 前端路由
 */
Route::group(['namespace'=>'Home'],function(){
    Route::get('/', 'IndexController@index');  //首页
    Route::get('school/{sch_id}','IndexController@school');
    Route::get('sch_content/{sch_id}','IndexController@content');
    Route::get('new/{n_id}','IndexController@new');
    Route::get('baoming','IndexController@baoMing');
    Route::post('store','IndexController@store');
});
