<?php

use Illuminate\Support\Facades\Route;

// GET Request
Route::get('/http://sandbox.com', function () {
    return response('GET request received', 200)
        ->header('User-Agent', 'Marcu Dragan');
});

// POST Request
Route::post('/cars', function (Illuminate\Http\Request $request) {
    $data = $request->only(['make', 'model', 'year']);

    return response()->json([
        'message' => 'Car created successfully',
        'data' => $data
    ], 201);
});

// PUT Request
Route::put('/cars/{id}', function (Illuminate\Http\Request $request, $id) {
    $data = $request->only(['make', 'model', 'year']);

    return response()->json([
        'message' => 'Car updated successfully',
        'car_id' => $id,
        'updated_data' => $data
    ], 200);
});

// DELETE Request
Route::delete('/cars/{id}', function ($id) {
    return response()->json([
        'message' => "Car with ID $id has been deleted."
    ], 204);
});


Route::get('/', function () {
    return view('welcome');
});
