<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Http;

class UserPacakgeTable extends Migration
{

    public function up()
    {   
        Schema::create('user_package_table', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('adress');
            $table->string('packageId');
            $table->string('deliveryStatus');
            $table->timestamps();
            });
    }

    public function down()
    {
        Schema::dropIfExists('user_package_table');
    }
}
