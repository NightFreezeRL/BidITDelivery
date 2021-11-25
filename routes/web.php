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
    return view('main', ['packs' => $packages, 'AUID' => $AUID]);
});
Route::get('/edit', function (){
    $AUID = Auth::user()->id;
    $package = Package::all();
    return view('edit', ['AUID' => $AUID, 'packs' => $package]);
});
Route::get('/package/{id}', function ($id){
    $package = Package::all()->where('packageNumber', $id);
    return view('package', ['pack' => $package]);
});
Route::post('/package/{id}', function ($id){
    //$id = request('id');
    $type = request('Status');
    Package::where('packageNumber', $id)->update(['deliveryStatus' => $type]);
    return redirect('/edit');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
