<?php

use App\Http\Controllers\API\EmployeeController;
use App\Http\Controllers\API\EmployerController;
use App\Http\Controllers\API\RequestController;
use App\Http\Controllers\API\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as RoutingRoute;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::apiResource([
//     'users'    => UserController::class,
//     'Employee' => EmployeeController::class,
//     'Employer' => EmployerController::class,
//     'Request'  => RequestController::class
// ]);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
