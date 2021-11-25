<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PackageController extends Controller
{
    public function generatePackageId($length=5)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

   /* function generatePackage(){
       $response = Http::get('https://bidit-web.herokuapp.com/api/users');

        foreach($response->object() as $user){
            if($user->user_data == null){
                continue;
            } else {
        DB::table('user_package_table')->insert([
            'name' => $user->name,
            'email' => $user->email,
            'address' => $user->user_data->address,
            'packageId' => PackageController::generatePackageId(),
            'deliveryStatus' => 'Standing By',
        ]);
    }
    }
    return print("Success");
    }*/

    public function generatePackage(Request $request){
        $generated_id = PackageController::generatePackageId();

        $package = new User_Package(); // vai arī kā tev sauc to modeli
        $package->name = $request->userName;
        $package->email = $request->userEmail;
        $package->address = $request->userAddress;
        $package->packageId = $request->$generated_id;
        $package->deliveryStatus = 'Standing By';
        $package->save();

        return response()->json([
            'packageID' => $generated_id
        ]);
    }

    function test()
    {
        return print("It works!");
    }

    function confirmation(){
        return ;
    }
}
