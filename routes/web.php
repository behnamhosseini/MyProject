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

$this->post('/checkcode', 'PhoneActivationCodeController@check')->name('checkCode');
$this->post('/checkexist', 'UserController@checkexist');
$this->post('/checkMaritalStatus', 'UserController@checkMaritalStatus');
//});


Route::middleware('checkFullyActivated')->group(function(){
    $this->get('/PersonalInformation','UserController@PersonalInformation')->name('PersonalInformation');
    $this->post('/PersonalInformation','UserController@savePersonalInformation')->name('SavePersonalInformation');
    $this->get('/ProfilePage/{user}','UserController@ProfilePage')->name('ProfilePage');
    $this->get('/ProfilePageAbout/{user}','UserController@ProfilePageAbout')->name('ProfilePageAbout');
    $this->get('/ProfilePagePhotos/{user}','UserController@ProfilePagePhotos')->name('ProfilePagePhotos');
    $this->get('/ProfilePageFavPages/{user}','UserController@ProfilePageFavPages')->name('ProfilePageFavPages');
    $this->get('/ProfilePageFriends/{user}','UserController@ProfilePageFriends')->name('ProfilePageFriends');
    $this->get('/ProfilePageBlogPosts/{user}','UserController@ProfilePageBlogPosts')->name('ProfilePageBlogPosts');
    $this->get('/ProfilePageFinancialAffairs/{user}','UserController@ProfilePageFinancialAffairs')->name('ProfilePageFinancialAffairs');
    $this->get('/FriendsRequests','UserController@FriendsRequests')->name('FriendsRequests');
    $this->get('/Notifications','UserController@Notifications')->name('Notifications');
    $this->get('/ChangePassword','UserController@ChangePassword')->name('ChangePassword');
    $this->get('/Newsfeed','UserController@Newsfeed')->name('Newsfeed');
    $this->get('/Hobbies','UserController@Hobbies')->name('Hobbies');
    $this->post('/ChangePassword','UserController@UpdatePassword')->name('UpdatePassword');
    $this->post('/Hobbies','UserController@UpdateHobbies')->name('UpdateHobbies');
    $this->post('/setCustomStatus','UserController@setCustomStatus')->name('setCustomStatus');
    $this->post('/getCustomStatus','UserController@getCustomStatus')->name('getCustomStatus');
    $this->post('/sendPost','PostController@sendPost')->name('sendPost');
    $this->post('/editPost/{post}','PostController@editPost')->name('editPost');
    $this->post('/removePost/{post}','PostController@removePost')->name('removePost');
    $this->post('/uploadHeaderImage','UserController@uploadHeaderImage')->name('uploadHeaderImage');
    $this->post('/uploadProfileImage','UserController@uploadProfileImage')->name('uploadProfileImage');
    $this->post('/uploadFamilyImage','UserController@uploadFamilyImage')->name('uploadFamilyImage');
    $this->post('/uploadFriendsImage','UserController@uploadFriendsImage')->name('uploadFriendsImage');
    $this->post('/uploadRelativesImage','UserController@uploadRelativesImage')->name('uploadRelativesImage');
    $this->post('/chargeYourAccount','UserController@chargeYourAccount')->name('chargeYourAccount');

});

Route::middleware('checkPhoneActivated')->group(function(){
    $this->get('/AccountSettings','UserController@AccountSettings')->name('AccountSettings');
    $this->post('/AccountSettings','UserController@saveAccountSettings')->name('SaveAccountSettings');
});



Route::get('/test',function (){


})->name('test');



Route::post('/ip','UserController@ip');

