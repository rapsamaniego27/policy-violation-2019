<?php

Route::group([
  /* 'middleware' => 'student', */
  'prefix' => '/admin'
], function () {

  Route::get('reports', 'AdminController@getReports')->name('reports');
});