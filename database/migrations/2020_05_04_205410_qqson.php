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
            'publication_name' => 'Multi-criteria decision-making model based on the level of doubt for information and training system (статья)',
            'journal' => 'Вестник АУЭС 19(4C)',
            'date' => '2012/12/10',
            'page' => '13',
        ]);
        DB::table('qqson')->insert([
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
        Schema::dropIfExists('qqson');
    }
}
