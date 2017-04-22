<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuantityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quantity', function (Blueprint $table) {
            $table->increments('uid');
            $table->integer('consumer')->default(0);
            $table->integer('surplus')->default(169);
            $table->integer('rand_get')->default(0);
            $table->tinyInteger('level')->default(1);
            $table->string('time')->default('0');
            $table->string('login_time')->default('0');
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
        Schema::dropIfExists('quantity');
    }
}
