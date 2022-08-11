<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\OrganisationController;
use App\Http\Controllers\SchedulerController;
use App\Http\Controllers\SignInController;
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
    Route::get('/signing', 'signing')->name('auth.signing');

    // Google Authentication
    Route::controller(UserController::class)->prefix('authentication')->group(function(){

        Route::get('/register', 'register')->name('auth.authentication.register');
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

// Admin
Route::group(['prefix'=>'admin'], function() {

    // Dashboard
    Route::controller(DashboardController::class)->prefix('dashboard')->group(function(){

        Route::get('/', 'index')->name('admin.dashboard.index');

    });

    // Scheduler
    Route::controller(SchedulerController::class)->prefix('scheduler')->group(function(){

        Route::get('/', 'index')->name('admin.scheduler.index');

        Route::post('store', 'store')->name('admin.scheduler.store');

        Route::delete('delete/{id}', 'destroy')->name('admin.scheduler.delete');

    });

    // Organisation
    Route::controller(OrganisationController::class)->prefix('organisation')->group(function(){

        Route::get('/', 'index')->name('admin.organisation.index');
        Route::get('show', 'show')->name('admin.organisation.show');
        Route::get('create', 'create')->name('admin.organisation.create');
        Route::get('edit', 'edit')->name('admin.organisation.edit');

        Route::post('store', 'store')->name('admin.organisation.store');

        Route::delete('delete/{id}', 'destroy')->name('admin.organisation.delete');

    });

    // Settings
    Route::controller(UserController::class)->prefix('settings')->group(function(){

        Route::get('/', 'index')->name('admin.settings.index');

        Route::post('store', 'store')->name('admin.settings.store');

        Route::delete('delete/{id}', 'destroy')->name('admin.settings.delete');

    });

});

// Manager
Route::group(['prefix'=>'manager'], function() {

    // Dashboard
    Route::controller(DashboardController::class)->prefix('dashboard')->group(function(){

        Route::get('/', 'index')->name('manager.dashboard.index');

    });

    // Scheduler
    Route::controller(SchedulerController::class)->prefix('scheduler')->group(function(){

        Route::get('/', 'index')->name('manager.scheduler.index');

        Route::post('store', 'store')->name('manager.scheduler.store');

        Route::delete('delete/{id}', 'destroy')->name('manager.scheduler.delete');

    });

    // Location
    Route::controller(LocationController::class)->prefix('location')->group(function(){

        Route::get('/', 'index')->name('manager.location.index');
        Route::get('show', 'show')->name('manager.location.show');
        Route::get('create', 'create')->name('manager.location.create');
        Route::get('edit', 'edit')->name('manager.location.edit');

        Route::post('store', 'store')->name('manager.location.store');

        Route::delete('delete/{id}', 'destroy')->name('manager.location.delete');

    });

    // Users
    Route::controller(UserController::class)->prefix('users')->group(function(){

        Route::get('/', 'index')->name('manager.users.index');
        Route::get('show', 'show')->name('manager.users.show');
        Route::get('create', 'create')->name('manager.users.create');
        Route::get('edit', 'edit')->name('manager.users.edit');

        Route::post('store', 'store')->name('manager.users.store');

        Route::delete('delete/{id}', 'destroy')->name('manager.users.delete');

    });

    // Group
    Route::controller(GroupController::class)->prefix('group')->group(function(){

        Route::get('/', 'index')->name('manager.group.index');
        Route::get('show', 'show')->name('manager.group.show');
        Route::get('create', 'create')->name('manager.group.create');
        Route::get('edit', 'edit')->name('manager.group.edit');

        Route::post('store', 'store')->name('manager.group.store');

        Route::delete('delete/{id}', 'destroy')->name('manager.group.delete');

    });

    // Lesson
    Route::controller(LessonController::class)->prefix('lesson')->group(function(){

        Route::get('/', 'index')->name('manager.lesson.index');
        Route::get('show', 'show')->name('manager.lesson.show');
        Route::get('create', 'create')->name('manager.lesson.create');
        Route::get('edit', 'edit')->name('manager.lesson.edit');

        Route::post('store', 'store')->name('manager.lesson.store');

        Route::delete('delete/{id}', 'destroy')->name('manager.lesson.delete');

    });

    // Task
    Route::controller(TaskController::class)->prefix('task')->group(function(){

        Route::get('/', 'index')->name('manager.task.index');
        Route::get('show', 'show')->name('manager.task.show');
        Route::get('create', 'create')->name('manager.task.create');
        Route::get('edit', 'edit')->name('manager.task.edit');

        Route::post('store', 'store')->name('manager.task.store');

        Route::delete('delete/{id}', 'destroy')->name('manager.task.delete');

    });

    // Settings
    Route::controller(UserController::class)->prefix('settings')->group(function(){

        Route::get('/', 'index')->name('manager.settings.index');

        Route::post('store', 'store')->name('manager.settings.store');

        Route::delete('delete/{id}', 'destroy')->name('manager.settings.delete');

    });

});

// Employee
Route::group(['prefix'=>'employee'], function() {

    // Dashboard
    Route::controller(DashboardController::class)->prefix('dashboard')->group(function(){

        Route::get('/', 'employee.dashboard.index')->name('index');

    });

    // Scheduler
    Route::controller(SchedulerController::class)->prefix('scheduler')->group(function(){

        Route::get('/', 'index')->name('employee.scheduler.index');

        Route::post('store', 'store')->name('employee.scheduler.store');

        Route::delete('delete/{id}', 'destroy')->name('employee.scheduler.delete');

    });

    // Settings
    Route::controller(UserController::class)->prefix('settings')->group(function(){

        Route::get('/', 'index')->name('employee.settings.index');

        Route::post('store', 'store')->name('employee.settings.store');

        Route::delete('delete/{id}', 'destroy')->name('employee.settings.delete');

    });

});
