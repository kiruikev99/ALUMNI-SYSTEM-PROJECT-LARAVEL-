<?php

use App\Models\alumni_jobs;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Spatie\Permission\Models\Permission;
use App\Http\Controllers\PermissionController;

Route::group(['middleware' => [ 'role:super-admin|admin|alumni']], function () {

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
});


Route::get('/', function () {
    return view('welcome');
});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login'); // Redirect to home or any other route after logout
});
Route::get('/dashboard', function () {
    $job = alumni_jobs::all();
    $userCount = User::count();
    $permission = Permission::count();
    $jobs = alumni_jobs::count();
    $roles = Role::count();

    return view('dashboard', [
        'user'=> $userCount,
        'permission'=>$permission,
        'role'=> $roles,
        'jobs'=> $jobs,
        'job'=> $job
       
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

// Additional routes as needed

require __DIR__.'/auth.php';
