<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Code;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/test', function(Request $request) {
    $Code = Code::where('code', $request->code)->get();
    if (count($Code) > 0)
        return json_encode(array('status' => 'success'));

        return json_encode(array('status' => 'error', 'message' => 'UNAUTHORIZED'));
});