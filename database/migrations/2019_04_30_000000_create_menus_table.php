<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');

            $table->string('description'); // Nasi! Lekker pittig met extra sambal en kippenpoten en aardappelschijfwa

            $table->timestamp('served_at'); // MA 14 okt.
            $table->timestamp('closed_at')->nullable(); // Sluitdatum van de lijst

            $table->timestamps(); // 20.30 heeft Ralf / Raplhpp . weet ik het het menu ingevuld
            $table->softDeletes();
        });

        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('menu_id'); // Nasi
            $table->integer('user_id'); // Jewel
            $table->integer('amount')->default(1); // 50
            $table->boolean('container')->default(false); // Wel of geen bakkie
            $table->string('comments'); // Ik lust geen Nasi!

            $table->timestamps(); // 20.34 bestelling geplaatst
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
