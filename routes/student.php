<?php

  Route::group([
    /* 'middleware' => 'student', */
    'prefix' => '/student'
  ], function(){
    
    Route::get('subjects', 'StudentController@getSubjects')->name('subjects');

    Route::get('enroll', 'StudentController@getEnroll')->name('enroll');

    Route::post('enroll', 'StudentController@postEnroll')->name('post-enroll');

    
  });