<?php

Route::middleware('web')->group(function () {
	Route::get('user-profile', 'Reta110\UserProfile\UserProfileController@edit')->name("user-profile.edit");
	Route::patch('user-profile', 'Reta110\UserProfile\UserProfileController@update')->name("login-profile.update");
});