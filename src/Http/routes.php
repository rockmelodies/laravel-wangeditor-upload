<?php

Route::group(['prefix' => 'laravel-wang-editor'], function () {

    Route::get('example', 'Douyasi\WangEditor\Http\Controllers\WangEditorController@getExample');
    Route::post('upload', 'Douyasi\WangEditor\Http\Controllers\WangEditorController@postUploadPicture');

});
