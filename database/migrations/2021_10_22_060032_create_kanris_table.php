<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKanrisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('users')) {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_name', 100);
            $table->string('email');
            $table->integer('password');
            $table->timestamps(0);
        });
       }

       if(!Schema::hasTable('companies')) {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('compary_name', 100);
            $table->string('street_address');
            $table->timestamps(0);
        });
       }

       if(!Schema::hasTable('products')) {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_name', 100);
            $table->string('email');
            $table->integer('password');
            $table->timestamps(0);
        });
       }

       if(!Schema::hasTable('sales')) {
        Schema::create('sales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_id');
            $table->timestamps(0);
        });
       }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kanris');
    }
}
