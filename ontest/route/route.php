<?php
/*
 * Route::get('think', function () {
    return 'hello,ThinkPHP5!';
});

Route::get('hello/:name', 'index/hello');

return [

];
 */
Route::group('/',function (){
    Route::rule('/','index/index/index','get|post');
    Route::rule('index','index/index/index','post|get');
    Route::rule('race','index/index/race','post|get');
    Route::rule('addt','index/index/addt','post|get');
    Route::rule('hello','index/index/hello','post|get');
    Route::rule('timeline','index/index/timeline','post|get');
});
Route::group('kungfu',function (){
    Route::rule('/','kungfu/index/index','get|post');
});