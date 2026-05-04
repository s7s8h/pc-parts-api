<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use App\Models\Part;
use App\Models\User;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Register new user
Route::post('/register', function (Request $request) {
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:5'
    ]);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password)
    ]);

    return response()->json([
        'message' => 'User registered successfully',
        'user' => $user
    ]);
});

// Login user and return token
Route::post('/login', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    $user = User::where('email', $request->email)->first();

    if (!$user || !Hash::check($request->password, $user->password)) {
        return response()->json([
            'message' => 'Invalid email or password'
        ], 401);
    }

    $token = $user->createToken('pc-parts-token')->plainTextToken;

    return response()->json([
        'message' => 'Login successful',
        'user' => $user,
        'token' => $token
    ]);
});

// Retrieve all PC parts
Route::get('/parts', function () {
    return Part::all();
});

// Retrieve PC parts by category
Route::get('/parts/category/{category}', function ($category) {
    return Part::where('category', $category)->get();
});

// Retrieve one PC part by ID
Route::get('/parts/{id}', function ($id) {
    return Part::findOrFail($id);
});

// Protected route: Add new PC part
Route::middleware('auth:sanctum')->post('/parts/add', function (Request $request) {
    $request->validate([
        'name' => 'required',
        'category' => 'required',
        'brand' => 'required',
        'price' => 'required|numeric',
        'specification' => 'required',
        'description' => 'nullable',
        'rating' => 'nullable|numeric|min:0|max:5',
        'warranty' => 'nullable',
        'stock' => 'required|integer',
        'image_url' => 'nullable'
    ]);

    $part = Part::create([
        'name' => $request->name,
        'category' => $request->category,
        'brand' => $request->brand,
        'price' => $request->price,
        'specification' => $request->specification,
        'description' => $request->description,
        'rating' => $request->rating ?? 0,
        'warranty' => $request->warranty,
        'stock' => $request->stock,
        'image_url' => $request->image_url
    ]);

    return response()->json([
        'message' => 'Part added successfully',
        'data' => $part
    ]);
});

// Protected route: Delete PC part by ID
Route::middleware('auth:sanctum')->delete('/parts/{id}', function ($id) {
    $part = Part::findOrFail($id);

    $part->delete();

    return response()->json([
        'message' => 'Part deleted successfully'
    ]);
});

// Protected route: Update PC part by ID
Route::middleware('auth:sanctum')->put('/parts/{id}', function (Request $request, $id) {
    $request->validate([
        'name' => 'required',
        'category' => 'required',
        'brand' => 'required',
        'price' => 'required|numeric',
        'specification' => 'required',
        'description' => 'nullable',
        'rating' => 'nullable|numeric|min:0|max:5',
        'warranty' => 'nullable',
        'stock' => 'required|integer',
        'image_url' => 'nullable'
    ]);

    $part = Part::findOrFail($id);

    $part->update([
        'name' => $request->name,
        'category' => $request->category,
        'brand' => $request->brand,
        'price' => $request->price,
        'specification' => $request->specification,
        'description' => $request->description,
        'rating' => $request->rating ?? 0,
        'warranty' => $request->warranty,
        'stock' => $request->stock,
        'image_url' => $request->image_url
    ]);

    return response()->json([
        'message' => 'Part updated successfully',
        'data' => $part
    ]);
});