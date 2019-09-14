<?php

Route::group([
  /* 'middleware' => 'student', */
  'prefix' => '/faculty'
], function () {

  Route::get('view-classes', 'FacultyController@getClasses')->name('view-classes');
});