<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\ChallengeController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\SchoolRepresentativeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\UploadQuestionsController;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('dashboard');

Route::get('/login', function () {
    return view('Auth.login');
})->name('login');

Route::get('/register', function () {
    return view('Auth.register');
})->name('register');

Route::get('/forms-elements', function () {
    return view('forms-elements');
})->name('forms-elements');

// Admin Routes
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/admin/upload-questions', [UploadQuestionsController::class, 'showUploadForm'])->name('showUploadForm');
Route::post('/admin/upload-questions', [UploadQuestionsController::class, 'uploadQuestions'])->name('uploadQuestions');

Route::get('/admin/manage-schools', [SchoolController::class, 'index'])->name('admin.manage-schools');

Route::get('/admin/set-challenge', function () {
    return view('admin.set-challenge');
})->name('admin.set-challenge');

Route::post('/admin/set-challenge', function () {
    // Handle setting challenge parameters
});

Route::get('/admin/view-challenge', function () {
    return view('admin.view-challenge');
})->name('admin.view-challenge');

Route::get('/admin/analytics', function () {
    return view('admin.analytics');
})->name('admin.analytics');

// School Representative Routes
Route::get('/representative/dashboard', function () {
    return view('representative.dashboard');
})->name('representative.dashboard');

Route::get('/representative/confirm-participants', function () {
    return view('representative.confirm-participants');
})->name('representative.confirm-participants');

Route::post('/representative/confirm-participants/{username}', function ($username) {
    // Handle confirmation of participants
})->name('representative.confirm');

// Participant Routes
Route::get('/participant/dashboard', function () {
    return view('participant.dashboard');
})->name('participant.dashboard');

Route::get('/participant/view-challenges', function () {
    return view('participant.view-challenges');
})->name('participant.view-challenges');

Route::post('/participant/attempt-challenge/{challenge_id}', function ($challenge_id) {
    // Handle challenge attempt
})->name('participant.attempt-challenge');

Route::get('/participant/view-results', function () {
    return view('participant.view-results');
})->name('participant.view-results');

// Participant Registration
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', function () {
    // Handle registration logic
});

Route::get('/user', function () {
    return view('components.user');
})->name('userhome');

// Challenges Routes
Route::get('/challenges', [ChallengeController::class, 'index'])->name('challenges.index');
Route::get('/challenges/create', [ChallengeController::class, 'create'])->name('challenges.create');
Route::post('/challenges', [ChallengeController::class, 'store'])->name('challenges.store');
Route::get('/challenges/{id}/edit', [ChallengeController::class, 'edit'])->name('challenges.edit');
Route::put('/challenges/{id}', [ChallengeController::class, 'update'])->name('challenges.update');
Route::delete('/challenges/{id}', [ChallengeController::class, 'destroy'])->name('challenges.destroy');

// Authentication Routes

Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');


// Admin Upload Questions and Answers
Route::get('/upload-questions-answers', [AdminController::class, 'showUploadForm'])->name('admin.upload-questions-form');
Route::post('/upload-questions-answers', [AdminController::class, 'uploadQuestions'])->name('admin.upload-questions');

Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::resource('schools', SchoolController::class);
