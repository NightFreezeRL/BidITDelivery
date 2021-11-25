<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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

    function generatePackage(){
        $response = Http::get('https://bidit-web.herokuapp.com/api/users');

        foreach($response->object() as $user){
        DB::table('user_package_table')->insert([
            'name' => $user->name,
            'email' => $user->email,
            'adress' => $user->adress,
            'packageId' => generatePackageId(),
            'deliveryStatus' => 'On Hold',
        ]);
    }
    return print("Success");
    }
}
