<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Qqson extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journal', function (Blueprint $table) {
            $table->id('user_id')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('patronymic')->nullable();
            $table->string('publication_name')->unique()->nullable();
            $table->string('Output_data')->nullable();
            $table->timestamps();
        });
        DB::table('journal')->insert([
            'first_name' => 'Sultanmakhmut',
            'last_name' => 'Yermanalyuly',
            'patronymic' => 'Presidentovich',
            'publication_name' => 'Energya Vselennoy(Ya Hippy)',
            'Output_data' => 'Lyublyu Coronavirus',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qqson');
    }
}
