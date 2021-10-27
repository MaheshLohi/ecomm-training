<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class User extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::create('consumers', function(Blueprint $table)
        { 
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('username');
            $table->string('address');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('password');
            
            
        
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consumer');
    }
}
