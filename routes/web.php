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
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group( [ 'prefix' => '/student', 'middleware' => ['TestLogin:student','auth'] ], function () {
    Route::prefix('profile')->group(function () {
        Route::get('/{id}/edit','Student\ProfilesController@edit')->name('user.profile.edit');
        Route::post('/{id}/update','Student\ProfilesController@update')->name('user.profile.update');
    });
    Route::prefix('register')->group(function () {
        Route::get('/show_courses','Student\RegisterController@index')->name('user.register.index');
        Route::post('/store','Student\RegisterController@store')->name('user.register.store');
    });
    Route::prefix('courses')->group(function () {
        Route::get('/index','Student\CoursesController@index')->name('user.courses.index');
        Route::get('/{id}/show','Student\CoursesController@show')->name('user.courses.show');
        Route::get('/{id}/{post_id}/show', 'Student\CoursesController@ShowPostsCourses')->name('user.courses.change');
    });
    Route::get('/{id}/show','HomeController@ShowPostsHome')->name('user.change');
    Route::get('/grades','Student\CoursesController@Grades')->name('user.Grades');
});

Route::group( [ 'prefix' => '/affair', 'middleware' => ['TestLogin:web','auth'] ], function () {
    Route::get('/{id}/show','HomeController@ShowPostsHome')->name('affair.change');
    Route::prefix('courses')->group(function (){
        Route::get('/', 'Affair\CoursesController@index')->name('affair.courses.show');
        Route::get('/create', 'Affair\CoursesController@create')->name('affair.courses.create');
        Route::post('/store', 'Affair\CoursesController@store')->name('affair.courses.store');
        Route::get('/{user}/edit', 'Affair\CoursesController@edit')->name('affair.courses.edit');
        Route::post('/{user}/update', 'Affair\CoursesController@update')->name('affair.courses.update');
        Route::get('/{user}/destroy', 'Affair\CoursesController@destroy')->name('affair.courses.destroy');
        Route::get('/reset', 'Affair\CoursesController@reset')->name('affair.courses.reset');
    });
    Route::prefix('Posts')->group(function () {
        Route::get('/{id}/create_post','Affair\Post@create_post')->name('affair.post.post_create');
        Route::Post('/{id}/store_post','Affair\Post@store_post')->name('affair.post.store_post');
        Route::get('/{id}/delete_post','Affair\Post@delete_post')->name('affair.post.post_delete');
    });
    Route::prefix('RegProf')->group(function () {
        Route::get('/','Affair\RegProfController@index')->name('affair.reg_pro.show');
        Route::get('/create','Affair\RegProfController@create')->name('affair.reg_pro.create');
        Route::post('/store','Affair\RegProfController@store')->name('affair.reg_pro.store');
        Route::get('/{id}/delete','Affair\RegProfController@destroy')->name('affair.reg_pro.delete');
    });
    Route::prefix('grades')->group(function () {
        Route::get('/','Affair\GradesController@index')->name('affair.grades');
        Route::post('/show','Affair\GradesController@show')->name('affair.grades.show');
        Route::get('/{id}/show','Affair\GradesController@showback')->name('affair.grades.show.back');
        Route::get('/{id1}/edit','Affair\GradesController@edit')->name('affair.grades.edit');
        Route::post('/{id1}/store','Affair\GradesController@store')->name('affair.grades.store');
    });
    Route::prefix('users')->group(function () {
        Route::get('/','Affair\UserController@index')->name('affair.users');
        Route::get('/{id}/delete','Affair\UserController@destroy')->name('affair.user.destroy');
    });
});

Route::group( [ 'prefix' => '/professor', 'middleware' => ['TestLogin:professor','auth'] ], function () {
    Route::prefix('profile')->group(function () {
        Route::get('/{id}/edit','Professor\ProfileController@edit')->name('prof.profile.edit');
        Route::post('/{id}/update','Professor\ProfileController@update')->name('prof.profile.update');
    });
    Route::prefix('courses')->group(function () {
        Route::get('/', 'Professor\Courses@index')->name('prof.courses.index');
        Route::get('/{id}/show','Professor\Courses@show')->name('prof.courses.show');
        Route::get('/{id}/{post_id}/show', 'Professor\Courses@ShowPostsCourses')->name('prof.courses.change');
        Route::get('/{id}/create_post','Professor\Courses@create_post')->name('prof.courses.post_create');
        Route::Post('/{id}/store_post','Professor\Courses@store_post')->name('prof.courses.store_post');
        Route::get('/{id}/{id2}/delete_post','Professor\Courses@delete_post')->name('prof.courses.post_delete');
        Route::get('/{id}/setting','Professor\Courses@setting')->name('prof.courses.setting');
        Route::post('/{id}/setting/store','Professor\Courses@setting_store')->name('prof.courses.setting_store');
    });
    Route::prefix('grades')->group(function () {
        Route::get('/{id}/show','Professor\GradesController@index')->name('prof.grades');
        Route::get('/{id1}/edit','Professor\GradesController@edit')->name('prof.grades.edit');
        Route::post('/{id1}/store','Professor\GradesController@store')->name('prof.grades.store');
    });
    Route::get('/{id}/show','HomeController@ShowPostsHome')->name('prof.change');
});