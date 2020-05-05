<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('publications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('magazine');
            $table->string('country');
            $table->string('university')->nullable();
            $table->year('year');
            $table->string('page');
            $table->string('url');
            $table->string('factor');
            $table->string('base');
            #$table->boolean('isVerified')->default('0')->change();
            $table->timestamps();
        });
        DB::table('publications')->insert([
            'id'=>'1',
            'title' => 'Multi-criteria decision-making model based on the level of doubt for information and training system (статья)',
            'magazine' => 'Riga: Computer Modelling & New Technologies, 19(4C)',
            'country' => 'Almaty',
            'university' => 'IITU',
            'year' => '2012',
            'page' => '12',
            'url' => 'https://somatic.kz/',
            'factor' => '0.5',
            'base' => 'Based',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publications');
    }
}
