<?php

use Illuminate\Support\Facades\Route;
use App\Models\Package;
use App\Models\PackageUser;
use App\Models\User_Package;

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
Route::post('/', function () {
    $id = request('packageId');
    return redirect()->to('/main/'.$id);
});
Route::get('/main/{id}', function ($id){
    $User_Packages = User_Package::all()->where('packageId', $id);
    return view('main', ['packs' => $User_Packages]);
});
Route::get('/edit', function (){
    $AUID = Auth::user()->id;
    $package = User_Package::all();
    return view('edit', ['AUID' => $AUID, 'packs' => $package]);
});
Route::get('/package/{id}', function ($id){
    $package = User_Package::all()->where('packageId', $id);
    return view('package', ['pack' => $package]);
});
Route::post('/package/{id}', function ($id){
    //$id = request('id');
    $type = request('Status');
    User_Package::where('packageId', $id)->update(['deliveryStatus' => $type]);
    return redirect('/edit');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
