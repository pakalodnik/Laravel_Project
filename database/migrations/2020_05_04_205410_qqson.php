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
        Schema::dropIfExists('qqsons');
        Schema::create('qqsons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('FIO')->nullable();
            $table->string('publication_name')->nullable();
            $table->string('journal')->nullable();
            $table->string('date')->unique()->nullable();
            $table->string('page')->nullable();
            $table->timestamps();
        });
        DB::table('qqsons')->insert([
            'FIO' => 'Y. Sultanmakhmut P.',
            'publication_name' => 'Multi-criteria decision-making model based on the level of doubt for information and training system (статья)',
            'journal' => 'Вестник АУЭС 19(4C)',
            'date' => '2012/12/10',
            'page' => '13',
        ]);
        DB::table('qqsons')->insert([
            'FIO' => 'Dauletbek Y. T.',
            'publication_name' => 'Multi-criteria decision-making model based on the level of doubt for information and training system (статья)',
            'journal' => 'Riga: Computer Modelling & New Technologies, 19(4C),',
            'date' => '2014/12/10',
            'page' => '13',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qqsons');
    }
}
