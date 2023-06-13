<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DonationCategoryController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PostCategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserFrontController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

/* Start Front-end routes */

Route::get('/', [FrontController::class, 'index']);
Route::get('/emergencyappeal', [FrontController::class, 'emergencyappeal']);
Route::get('/donate/online', [FrontController::class, 'donate_online']);
Route::get('/donate/bank', [FrontController::class, 'donate_bank']);
Route::get('/project', [FrontController::class, 'project']);
Route::get('/about', [FrontController::class, 'about']);
Route::get('/contact', [FrontController::class, 'contact']);

Route::get('/donate/user/login', [UserFrontController::class, 'login']);
Route::post('/donate/user/login_process', [UserFrontController::class, 'login_process'])->name('login.r_l');
Route::get('/donate/user/logout', function () {
    session()->forget('FRONT_USER_LOGIN');
    session()->forget('FRONT_USER_ID');
    session()->flash('error', 'Logout Successfully');
    return redirect('/');
});
Route::get('/donate/user/forget_pass_page', [UserFrontController::class, 'forget_pass_page']);
Route::post('/donate/user/forgot_password', [UserFrontController::class, 'forgot_password'])->name('forget.f_p');
Route::get('/donate/user/forgot_password_change/{id}', [UserFrontController::class, 'forgot_password_change']);
Route::post('/donate/user/forgot_password_change_process', [UserFrontController::class, 'forgot_password_change_process'])->name('forget.c_p');

Route::get('/donate/user/registration', [UserFrontController::class, 'registration']);
Route::post('/donate/user/registration_process', [UserFrontController::class, 'registration_process'])->name('registration.r_p');
Route::get('/verification/{id}', [UserFrontController::class, 'email_verification']);
Route::get('/donate/user/dashboard', [UserFrontController::class, 'dashboard']);
Route::get('/donate/user/editprofile', [UserFrontController::class, 'edit_profile']);
Route::post('/donate/user/edit_profile_process', [UserFrontController::class, 'edit_profile_process'])->name('edit.e_p');
Route::get('/donate/donation/{name}', [UserFrontController::class, 'dashboard']);
/* end Front-end routes */

/* Start Back-end Routes */
Route::get('admin', [AdminController::class, 'index']);
Route::post('admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::group(['middleware' => 'admin_auth'], function () {
    Route::get('admin/dashboard', [AdminController::class, 'dashboard']);
    Route::get('admin/setting', [AdminController::class, 'setting']);
    Route::post('admin/user/register', [AdminController::class, 'registration'])->name('admin.registration');
    Route::get('admin/user/delete/{id}', [AdminController::class, 'delete_user']);
    Route::get('admin/profile', [AdminController::class, 'profile']);
    Route::post('admin/profile_update', [AdminController::class, 'profile_update'])->name('admin.profile_update');

    Route::get('admin/category/manage_donation', [DonationCategoryController::class, 'manage_donation']);
    Route::get('admin/category/manage_donation/{id}', [DonationCategoryController::class, 'manage_donation']);
    Route::post('admin/category/manage_donation_process', [DonationCategoryController::class, 'manage_donation_process'])->name('category.d_p');
    Route::get('admin/category/delete/{id}', [DonationCategoryController::class, 'delete']);

    Route::get('admin/category/manage_post', [PostCategoryController::class, 'manage_post']);
    Route::get('admin/category/manage_post/{id}', [PostCategoryController::class, 'manage_post']);
    Route::post('admin/category/manage_post_process', [PostCategoryController::class, 'manage_post_process'])->name('category.p_p');
    Route::get('admin/category/delete/{id}', [PostCategoryController::class, 'delete']);

    Route::get('admin/post', [PostController::class, 'index']);
    Route::get('admin/post/manage_post', [PostController::class, 'manage_post']);
    Route::get('admin/post/manage_post/{id}', [PostController::class, 'manage_post']);
    Route::post('admin/post/manage_post_process', [PostController::class, 'manage_post_process'])->name('post.m_p_p');
    Route::get('admin/post/delete/{id}', [PostController::class, 'delete']);
});
Route::get('admin/logout', function () {
    session()->forget('ADMIN_LOGIN');
    session()->forget('ADMIN_ID');
    session()->forget('ADMIN_NAME');
    session()->forget('ADMIN_EMAIL');
    session()->forget('ADMIN_PASSWORD');
    session()->flash('error', 'Logout Successfully');
    return redirect('admin');
});
/* End Back-end Routes */
