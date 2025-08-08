<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\ArticleController;

Route::get('/', fn () => view('welcome'))->name('home'); // Homepage
Route::get('/about', fn () => view('about'))->name('about'); // Static about page
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index'); // List all articles
Route::get('/dashboard', fn () => view('dashboard'))->middleware('auth')->name('dashboard'); // Dashboard
Route::middleware(['auth'])->group(function () {
    // Resource routes for articles (create, store, edit, update, destroy, show)
    
    Route::resource('articles', ArticleController::class)->except(['index']);
});

Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('articles.show'); // View single article
Route::get('/about', fn () => view('about'))->name('about'); // Static about page


Route::get('/login', fn () => view('auth.login'))->name('login');
Route::get('/register', fn () => view('auth.register'))->name('register');

// Handle login
Route::post('/login', function (Request $request) {
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        return redirect()->intended('/');
    }

    return back()->withErrors([
        'email' => 'Invalid credentials.',
    ]);
});

// Handle registration
Route::post('/register', function (Request $request) {
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ]);

    $data['password'] = bcrypt($data['password']);

    \App\Models\User::create($data);

    return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
});

// Handle logout (POST only for safety)
Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('home');
})->name('logout');

