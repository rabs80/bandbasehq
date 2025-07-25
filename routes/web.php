<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegistrationController;

Auth::routes(['register' => false]);

// Public facing routes
Route::get('/', function () {
    return view('public.home');
})->name('home');

Route::view('/about', 'public.about')->name('about');

Route::get('/features', function () {
    return view('public.features');
})->name('features');

Route::view('/band-features', 'public.features.bands')->name('band-features');
Route::view('/venue-features', 'public.features.venues')->name('venue-features');
Route::view('/agent-features', 'public.features.agents')->name('agent-features');

Route::view('/pricing', 'public.pricing')->name('pricing');
Route::view('/contact', 'public.contact')->name('contact');
Route::view('/faq', 'public.faq')->name('faq');

// Contact form handler
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

// Carousel data
Route::get('/carousel-data/{folder}', function ($folder) {
    $basePath = public_path("images/carousel");
    $folderPath = File::exists("$basePath/$folder") ? "$basePath/$folder" : "$basePath/default";
    $captionFile = "$folderPath/captions.json";

    $images = collect(File::files($folderPath))
        ->filter(fn($file) => in_array($file->getExtension(), ['jpg', 'jpeg', 'png', 'webp']))
        ->sortBy(fn($file) => $file->getFilename())
        ->values()
        ->map(fn($file) => asset("images/carousel/" . basename($folderPath) . "/" . $file->getFilename()))
        ->all();

    $captions = File::exists($captionFile)
        ? json_decode(File::get($captionFile), true)
        : [];

    return response()->json([
        'images' => $images,
        'captions' => $captions,
    ]);
});

// Registration and Login
Route::get('/register/{role?}', [RegistrationController::class, 'show'])
    ->where('role', 'band|venue|agent')
    ->name('register');

Route::post('/register', [RegistrationController::class, 'submit'])->name('register.submit');

Route::view('/login', 'auth.login')->name('login');

// Behind the login routes



