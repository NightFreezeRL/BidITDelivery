<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Http;

class UserPacakgeTable extends Migration
{

    public function up()
    {   
        $response = Http::get('https://bidit-web.herokuapp.com/api/users');
        foreach($response->object() as $user)
        {
            $table->id($user->id);
            $table->string($user->name);
            $table->string($user->email)->unique();
            //$table->string($user->adress);
            $table->string([PacakgeController::class, 'generatePackageId']);
            $table->string('deliveryStatus');
        }
    }

    public function down()
    {
        Schema::dropIfExists('user_package_table');
    }
}
