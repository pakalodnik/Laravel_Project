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
        Schema::dropIfExists('qqson');
        Schema::create('qqson', function (Blueprint $table) {
            $table->id('user_id')->nullable();
            $table->string('FIO')->nullable();
            $table->string('publication_name')->nullable();
            $table->string('journal')->nullable();
            $table->date('date')->unique()->nullable();
            $table->string('page')->nullable();
            $table->timestamps();
        });
        DB::table('qqson')->insert([
            'FIO' => 'Y. Sultanmakhmut P.',
            'publication_name' => 'Energya Vselennoy(Ya Hippy)',
            'journal' => 'Masonskoe bratstvo',
            'date' => '2012/12/10',
            'page' => '12',
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
