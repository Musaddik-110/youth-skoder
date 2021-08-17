<?php


Auth::routes();
// Auth::routes(['verify' => true]);
// Social Login
Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider')->name('login.social');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');


Route::prefix('user')->group(function () {
    Route::name('user.')->group(function () {
        Route::namespace('User')->group(function () {
            Route::group(['middleware' => ['auth', 'preventBackHistory']], function () {
                //dashboard
                Route::get('dashboard', 'DashboardController@dashboard')->name('dashboard');
                //User Profile
                Route::get('change-password', 'ProfileController@changePasswordView')->name('change.password');
                Route::post('change-password', 'ProfileController@changePassword')->name('change.password');
                Route::get('profile', 'ProfileController@profileView')->name('profile.view');
                Route::post('profile', 'ProfileController@profileChange')->name('profile.change');
            });
        });
    });
});
