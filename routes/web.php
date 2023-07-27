<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Route::get('/', function () {
    return view('home');
});

Route::view('/', 'home');
*/





Route::get('/auth/google/redirect','UserController@googleredirect')->name("Googlelogin");
Route::get('/auth/google/callback', 'UserController@googlecallback');


Route::group(['middleware' =>'canInstall'], function () {
	Route::group(['middleware' =>'locale'], function () {

        Route::get('/','HomeController@index');
        //Route::match(array('GET', 'POST'),'login','UserController@login');
        //Route::match(array('GET','POST'),'register','UserController@register');
        Route::controller(UserController::class)->group(function(){
            Route::match(array('GET', 'POST'),'login','login');
            Route::match(array('GET','POST'),'register','register')->name('register.register');
        });



	});
});

Route::middleware(['candidate_guest'])->group(function () {


    Route::get('candidate-dashboard','CandidateDashboardController@dashboard');

    Route::post('add-candidate-profile','CandidateDashboardController@addprofile');

    Route::match(array('GET', 'POST'),'update-candidate-profile','CandidateDashboardController@updateprofile');

    Route::match(array('GET', 'POST'), 'update-resume','CandidateDashboardController@updateresume');

    Route::match(array('GET', 'POST'), 'add-resume','CandidateDashboardController@addresume');



	Route::get('{name}/{n}', function () {

		return redirect('/candidate-profile');

	});
});





Route::group(['middleware' => 'employer_guest'], function() {

    Route::get('employer-dashboard','EmployerDashboardController@dashboard');

    Route::post('add-employer-profile','EmployerDashboardController@addprofile');
    Route::match(array('GET', 'POST'),'update-employer-profile','EmployerDashboardController@updateprofile');
    Route::match(array('GET','POST'),'candidate-change-password','CandidateDashboardController@changepassword');

    Route::match(array('GET', 'POST'),'post-job','EmployerDashboardController@postjob');

    Route::match(array('GET','POST'),'manage-jobs','EmployerDashboardController@managejobs');


});



Route::get('/log-out', function () {

	$user_type = @Auth::user()->user_type;
	Auth::logout();
	if (@$user_type == '') {
		return redirect('/');
	} else {
		return redirect('/');
	}

});





// static pages
Route::get('{name}', function () {

	return redirect('/');

});


Route::view('a1','add');
