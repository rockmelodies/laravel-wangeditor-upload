<?php

Route::group(['prefix' => 'laravel-wang-editor'], function () {

    Route::get('example', 'rockymelody\WangEditor\Http\Controllers\WangEditorController@getExample');
    Route::post('upload', 'rockymelody\WangEditor\Http\Controllers\WangEditorController@postUploadPicture');

});
