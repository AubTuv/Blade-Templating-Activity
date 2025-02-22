<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/explore-blade', function () {
    $users = ['Alice', 'Bob', 'Charlie']; // Ensure this is an array
    $products = ['Laptop', 'Phone', 'Tablet']; // Add sample data for products
    return view('explore', compact('users', 'products'));
});
