<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Journal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('journal');
        Schema::create('journal', function (Blueprint $table) {
            $table->id('user_id')->nullable();
            $table->string('FIO')->nullable();
            $table->string('publication_name')->nullable();
            $table->string('source')->nullable();
            $table->date('date')->unique()->nullable();
            $table->string('page')->nullable();
            $table->string('url')->nullable();
            $table->timestamps();
        });
        DB::table('journal')->insert([
            'FIO' => 'Y. Sultanmakhmut P.',
            'publication_name' => 'Особенности управления процессом обучения при организации МООС (статья)',
            'source'=>'Scopus',
            'date' => '2012/12/10',
            'page' => '12',
            'url'=>'Somatic.kz'
        ]);
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('journal');
        //
    }
}
