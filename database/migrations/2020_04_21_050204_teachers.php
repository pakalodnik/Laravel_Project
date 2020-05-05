<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Teachers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::dropIfExists('teachers');
        Schema::create('teachers', function (Blueprint $table) {
            $table->id('user_id')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('patronymic')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('description')->nullable();
            $table->string('own');
            $table->timestamps();
        });
        DB::table('teachers')->insert([
            'first_name' => 'Sultanmakhmut',
            'last_name' => 'Yermanalyuly',
            'patronymic' => 'Presidentovich',
            'email' => 'Sultan.Yerman@somatic.kz',
            'description' => 'hzmzhzmhzmz',
            'own' => 'dsa',
        ]);
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
        //
    }
}
