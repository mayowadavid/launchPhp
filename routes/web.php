<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\LicenseController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\OrganisationController;
use App\Http\Controllers\SchedulerController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
use SocialiteProviders\Manager\Config;
use Symfony\Component\HttpFoundation\Request;

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

// Authentication
Route::group(['prefix'=>'auth', 'middleware' => ['web','2fa']], function() {

    // Normal SignIn page
    Route::controller(UserController::class)->group(function(){
        Route::get('/signing', 'signing')->name('auth.signing');
    });

    // Google Authentication
    Route::controller(UserController::class)->prefix('authentication')->group(function(){

        Route::get('/register/{mail}', 'register')->name('auth.authentication.register');
        Route::get('/signing', 'signing')->name('auth.authentication.signing');

        Route::post('/verify', 'verify')->name('auth.authentication.verify');

    });

    // Google 0auth2.0
    Route::group(['prefix'=>'google'], function() {

        Route::get('redirect', function () {
            return Socialite::driver('google')->redirect();
        });

        Route::get('callback', function () {
            $user = Socialite::driver('google')->user();

//            $controller = new UserController();
//            return $controller->verify('google', $user->user["mail"], $user->token);
        });

    });

    // Surfconext
    Route::group(['prefix'=>'surfconext'], function() {

        Route::get('redirect', function () {
            return Socialite::driver('surfconext')->redirect();
        });

        Route::get('callback', function () {
            $user = Socialite::driver('surfconext')->user();

//            $controller = new UserController();
//            return $controller->verify('surfconext', $user->user["mail"], $user->token);
        });

    });

    // Microsoft Azure
    Route::group(['prefix'=>'azure'], function() {

        Route::get('redirect', function (Request $request) {
            return Socialite::driver('azure')->setConfig(new Config(
                $request->client,
                $request->secret,
                url(env('AD_REDIRECT_PATH', 'auth/azure/callback')),
                ['tenant' => $request->tenant]
            ))->redirect();
        });

        Route::get('callback', function () {
            $auth = Socialite::driver('azure')->user();

            $controller = new UserController();
            $verify = $controller->verifyToken('azure', $auth->user["mail"], $auth->token);
            $token = $controller->getToken($verify->email, $verify->organisation_id, $verify->middleware, '1.0.0', $verify->token);

            $user = Auth::User();
            Session::put('user', $user);
            session(['user_paseto_token' => $token]);

            return redirect('admin.dashboard.index');
        });

    });

});

// Dashboard general
Route::controller(DashboardController::class)->prefix('dashboard')->group(function(){

    Route::get('/', 'index')->name('dashboard.index');

});

Route::controller(SchedulerController::class)->prefix('scheduler')->group(function(){

    Route::get('/', 'index')->name('scheduler.index');

    Route::post('store', 'store')->name('scheduler.store');

    Route::get('delete/{id}', 'destroy')->name('scheduler.delete');

});

Route::controller(UserController::class)->prefix('settings')->group(function(){

    Route::get('/', 'settings')->name('settings.index');

    Route::put('edit/{id}', 'edit')->name('settings.store');

    Route::get('delete/{id}', 'destroy')->name('settings.delete');

});

// Admin
Route::group(['prefix'=>'admin'], function() {

    // Organisation
    Route::controller(OrganisationController::class)->prefix('organisation')->group(function(){

        Route::get('/', 'index')->name('admin.organisation.index');
        Route::get('/{id}', 'show')->name('admin.organisation.show');
        Route::get('create', 'create')->name('admin.organisation.create');

        Route::put('edit/{id}', 'edit')->name('admin.organisation.edit');

        Route::post('store', 'store')->name('admin.organisation.store');

        Route::get('delete/{id}', 'destroy')->name('admin.organisation.delete');

    });

    // License
    Route::controller(LicenseController::class)->prefix('license')->group(function(){

        Route::get('/', 'index')->name('admin.license.index');
        Route::get('/{id}', 'show')->name('admin.license.show');

        Route::post('store', 'store')->name('admin.license.store');

        Route::get('delete/{id}', 'destroy')->name('admin.license.delete');

    });

});

// Manager
Route::group(['prefix'=>'manager'], function() {

    Route::controller(OrganisationController::class)->prefix('organisation')->group(function() {

        Route::get('/', 'organisationSettings')->name('manager.settings.organisation');

        Route::get('/{id}', 'organisationSettingsEdit')->name('manager.settings.organisation.edit');
    });

    // Location
    Route::controller(LocationController::class)->prefix('location')->group(function(){

        Route::get('/', 'index')->name('manager.location.index');
        Route::get('/{id}', 'show')->name('manager.location.show');
        Route::get('create', 'create')->name('manager.location.create');

        Route::put('/{id}', 'edit')->name('manager.location.edit');

        Route::post('store', 'store')->name('manager.location.store');

        Route::get('delete/{id}', 'destroy')->name('manager.location.delete');

    });

    // Users
    Route::controller(UserController::class)->prefix('users')->group(function(){

        Route::get('/', 'index')->name('manager.users.index');
        Route::get('/{id}', 'show')->name('manager.users.show');
        Route::get('create', 'create')->name('manager.users.create');

        Route::put('/{id}', 'edit')->name('manager.users.edit');

        Route::post('store', 'store')->name('manager.users.store');

        Route::get('delete/{id}', 'destroy')->name('manager.users.delete');

    });

    // Group
    Route::controller(GroupController::class)->prefix('group')->group(function(){

        Route::get('/', 'index')->name('manager.group.index');
        Route::get('/{id}', 'show')->name('manager.group.show');
        Route::get('create', 'create')->name('manager.group.create');

        Route::put('/{id}', 'edit')->name('manager.group.edit');

        Route::post('store', 'store')->name('manager.group.store');

        Route::get('delete/{id}', 'destroy')->name('manager.group.delete');

    });

    // Lesson
    Route::controller(LessonController::class)->prefix('lesson')->group(function(){

        Route::get('/', 'index')->name('manager.lesson.index');
        Route::get('/{id}', 'show')->name('manager.lesson.show');
        Route::get('create', 'create')->name('manager.lesson.create');

        Route::put('/{id}', 'edit')->name('manager.lesson.edit');

        Route::post('store', 'store')->name('manager.lesson.store');

        Route::get('delete/{id}', 'destroy')->name('manager.lesson.delete');

    });

    // Task
    Route::controller(TaskController::class)->prefix('task')->group(function(){

        Route::get('/', 'index')->name('manager.task.index');
        Route::get('/{id}', 'show')->name('manager.task.show');
        Route::get('create', 'create')->name('manager.task.create');

        Route::put('/{id}', 'edit')->name('manager.task.edit');

        Route::post('store', 'store')->name('manager.task.store');

        Route::get('delete/{id}', 'destroy')->name('manager.task.delete');

    });

});
