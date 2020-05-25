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
        DB::table('qqsons')->insert([
            'FIO' => 'R. Raisa K.',
            'publication_name' => 'Informational Technologies on any levels of enterprise (статья)',
            'journal' => 'Store IITU 19(4C)',
            'date' => '2018/12/10',
            'page' => '11',
        ]);
        DB::table('qqsons')->insert([
            'FIO' => 'E. Mask K.',
            'publication_name' => 'Electronics in XXI (статья)',
            'journal' => 'Cambridge journal 20(4B)',
            'date' => '2020/08/10',
            'page' => '21',
        ]);
        DB::table('qqsons')->insert([
            'FIO' => 'Z. Marc B.',
            'publication_name' => 'Can FinTech companies became online banking? (статья)',
            'journal' => 'History of Berkley',
            'date' => '2019/11/11',
            'page' => '18',
        ]);
        DB::table('qqsons')->insert([
            'FIO' => 'D. Pavel K.',
            'publication_name' => 'How you confident on blockchain privacy? (статья)',
            'journal' => 'Saints-Peterburg IT',
            'date' => '2017/05/06',
            'page' => '15',
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
