<?php

use Illuminate\Support\Facades\Auth;

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'UserController@logout')->name('logout');
Route::get('/resetPassword', 'Auth\ForgotPasswordController@showLinkRequestForm');
//registerActivationCode
//Route::group(function(){

    $this->get('/register', 'UserController@register')->name('register');
$this->post('/signup', 'PhoneActivationCodeController@create')->name('signup');
$this->get('/login', 'UserController@login')->name('login');
$this->post('/checkcode', 'PhoneActivationCodeController@check')->name('checkCode');
$this->post('/checkexist', 'UserController@checkexist');
$this->post('/checkMaritalStatus', 'UserController@checkMaritalStatus');
//});




Route::middleware('checkFullyActivated')->group(function(){
    $this->get('/PersonalInformation','UserController@PersonalInformation')->name('PersonalInformation');
    $this->post('/PersonalInformation','UserController@savePersonalInformation')->name('SavePersonalInformation');
    $this->get('/ProfilePage','UserController@ProfilePage')->name('ProfilePage');
    $this->get('/ChangePassword','UserController@ChangePassword')->name('ChangePassword');
    $this->post('/ChangePassword','UserController@UpdatePassword')->name('UpdatePassword');
    $this->get('/Hobbies','UserController@Hobbies')->name('Hobbies');
    $this->post('/Hobbies','UserController@UpdateHobbies')->name('UpdateHobbies');
    $this->post('/setCustomStatus','UserController@setCustomStatus')->name('setCustomStatus');
    $this->post('/getCustomStatus','UserController@getCustomStatus')->name('getCustomStatus');
    $this->get('/Newsfeed','UserController@Newsfeed')->name('Newsfeed');
    $this->post('/sendPost','PostController@sendPost')->name('sendPost');
    Route::post('/ip','UserController@ip');
});

Route::middleware('checkPhoneActivated')->group(function(){
    $this->get('/AccountSettings','UserController@AccountSettings')->name('AccountSettings');
    $this->post('/AccountSettings','UserController@saveAccountSettings')->name('SaveAccountSettings');
});



Route::get('/test',function (){
     return view('imageCrop');
});
