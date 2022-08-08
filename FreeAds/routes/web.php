<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LocationsController;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('home', [HomeController::class, 'home'])->name('home');

Route::get('/dashboard', function ()
{return view('dashboard');
})->middleware(['auth','verified'])->name('dashboard');
require __DIR__.'/auth.php';

Route::group(['middleware' => 'verified','auth'], function() {
Route::get('/dashboard', function () {
return view('dashboard');
})->name('dashboard');

Route::view('profile', 'profile')->name('profile');

Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])
->name('profile.update');
});

Route::resource('posts', PostController::class)->middleware('verified','auth');

Route::get('women', [CategoryController::class, 'women'])->name('women');

Route::get('men', [CategoryController::class, 'men'])->name('men');

Route::get('multi', [CategoryController::class, 'multi'])->name('multi');

Route::get('home_cat', [CategoryController::class, 'home_cat'])->name('home_cat');

Route::get('cars', [CategoryController::class, 'cars'])->name('cars');

Route::get('real_estate', [CategoryController::class, 'real_estate'])->name('real_estate');

Route::get('auvergne_rhone_alpes', [LocationsController::class, 'auvergne_rhone_alpes'])->name('auvergne_rhone_alpes');

Route::get('bourgogne_franche_comte', [LocationsController::class, 'bourgogne_franche_comte'])->name('bourgogne_franche_comte');

Route::get('bretagne', [LocationsController::class, 'bretagne'])->name('bretagne');

Route::get('centre_val_de_loire', [LocationsController::class, 'centre_val_de_loire'])->name('centre_val_de_loire');

Route::get('corse', [LocationsController::class, 'corse'])->name('corse');

Route::get('grand_est', [LocationsController::class, 'grand_est'])->name('grand_est');

Route::get('hauts_de_france', [LocationsController::class, 'hauts_de_france'])->name('hauts_de_france');

Route::get('île_de_france', [LocationsController::class, 'île_de_france'])->name('île_de_france');

Route::get('normandie', [LocationsController::class, 'normandie'])->name('normandie');

Route::get('nouvelle_aquitaine', [LocationsController::class, 'nouvelle_aquitaine'])->name('nouvelle_aquitaine');

Route::get('occitanie', [LocationsController::class, 'occitanie'])->name('occitanie');

Route::get('pays_de_loire', [LocationsController::class, 'pays_de_loire'])->name('pays_de_loire');

Route::get('provence_alpes_cote_azur', [LocationsController::class, 'provence_alpes_cote_azur'])->name('provence_alpes_cote_azur');

Route::get('/search', [PostController::class, 'search'])->name("posts.search");

// Route::get('/show', [PostController::class, 'show'])->name("posts.show2");

Route::get('/searchglobal', [PostController::class, 'searchglobal'])->name("searchglobal");

Route::get('/see', [PostController::class, 'see'])->name("see");

Route::get('userDestroy', [ProfileController::class, 'userDestroy'])->name("user.destroy");

Route::get('/message/{seller_id}/{ad_id}', [MessageController::class, 'create'])->name('message.create');

Route::post('/message', [MessageController::class, 'store'])->name('message.store');

Route::get('/message-read', [PostController::class, 'read'])->name('message.read');

Route::put('profilePassword', [ProfileController::class, 'updatePassword'])->name('profile.updatePassword');

Route::post('profile', [ProfileController::class, 'updateAvatar'])->name('profile.updateAvatar');

Route::view('profilePassword', 'profilePassword')->name('profilePassword');

// ANSWER //

Route::get('/messageA/{buyer_id}/{ad_id}', [MessageController::class, 'createA'])->name('message.createA');

Route::post('/messageA', [MessageController::class, 'storeA'])->name('message.storeA');

Route::get('/message-readA', [PostController::class, 'readA'])->name('message.readA');

Route::get('/message-global', [PostController::class, 'readglobal'])->name('readglobal');

Route::resource('message', MessageController::class)->middleware('verified','auth');