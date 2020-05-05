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
            $table->string('university');
            $table->year('year');
            $table->string('page');
            $table->string('url');
            $table->string('factor');
            $table->string('base');
            #$table->boolean('isVerified')->default('0')->change();
            $table->timestamps();
        });
        DB::table('teachers')->insert([
            'id'=>'1',
            'title' => 'Energya Vselennoy(Ya Hippy)',
            'magazine' => 'Masonskoe bratstvo',
            'country' => 'Almaty',
            'university' => 'IITU',
            'year' => '2012',
            'page' => '12',
            'url' => 'Somatic.kz',
            'factor' => 'dsa',
            'base' => 'dsa',
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
