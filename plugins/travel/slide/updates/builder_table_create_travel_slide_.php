<?php namespace Travel\Slide\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTravelSlide extends Migration
{
    public function up()
    {
        Schema::create('travel_slide_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 1000)->nullable();
            $table->string('price', 500)->nullable();
            $table->string('image', 100)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('travel_slide_');
    }
}
