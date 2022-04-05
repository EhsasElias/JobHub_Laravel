<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
      
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('job-title');
            $table->string('company-name');
            $table->string('job-details');
            $table->integer('job-numbers');
            $table->string('image')->default('person.png');
         
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
};
