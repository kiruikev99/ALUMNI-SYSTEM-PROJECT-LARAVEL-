<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Models\alumni_jobs;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

Route::group(['middleware' => ['role:super-admin|admin|alumni']], function () {
    Route::resource('portfolio', PortfolioController::class);
    Route::get('permissions/{permissionId}/delete', [PermissionController::class, 'destroy']);
    Route::resource('permissions', PermissionController::class);
    Route::get('jobs/{jobId}/delete', [JobController::class, 'destroy']);
    Route::resource('users', UserController::class);
    Route::get('users/{userId}/delete', [UserController::class, 'destroy']);
    Route::resource('jobs', JobController::class);
    Route::resource('roles', RoleController::class);
    Route::get('roles/{roleId}/delete', [RoleController::class, 'destroy']);
    Route::get('roles/{roleId}/give-permissions', [RoleController::class, 'addPermissionToRole']);
    Route::put('roles/{roleId}/give-permissions', [RoleController::class, 'givePermissionToRole']);

    Route::get('jobs/{jobId}/view', function ($id) {
        $job = alumni_jobs::findOrFail($id);
        return view('role-permission.jobs.alumni-job-view', [
            'title' => $job->job_title,
            'name' => $job->job_name,
            'description' => $job->job_description,
            'qualification' => $job->job_qualification,
            'amount' => $job->job_amount
        ]);
    });
});

Route::get('/', function () {
    return view('welcome');
});



Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
});

Route::get('/dashboard', function () {
    return view('dashboard', [
        'user' => User::count(),
        'permission' => Permission::count(),
        'role' => Role::count(),
        'jobs' => alumni_jobs::count(),
        'job' => alumni_jobs::all()
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::fallback(function () {
    return view('errors.404');
});
