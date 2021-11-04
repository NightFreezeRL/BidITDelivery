<?php

use Illuminate\Support\Facades\Route;
use App\Models\Package;
use App\Models\PackageUser;

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
});
Route::get('/main', function (){
    $AUID = Auth::user()->id;
    $userPackages = DB::table('user_package_list')->where('userID',  $AUID)->pluck('packageID')->toArray();
    $packages = Package::all()->whereIn('id', $userPackages);
    return view('main', ['packs' => $packages]);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
