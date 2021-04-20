<?php namespace Travel\Trangchu\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTravelTrangchuAbout extends Migration
{
    public function up()
    {
        Schema::create('travel_trangchu_about', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 100)->nullable();
            $table->text('content')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('travel_trangchu_about');
    }
}
