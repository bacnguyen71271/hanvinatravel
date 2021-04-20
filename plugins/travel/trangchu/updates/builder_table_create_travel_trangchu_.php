<?php namespace Travel\Trangchu\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTravelTrangchu extends Migration
{
    public function up()
    {
        Schema::create('travel_trangchu_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 100)->nullable();
            $table->text('phonecall')->nullable();
            $table->string('phoneshow', 25)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('logo', 100)->nullable();
            $table->string('facebook', 100)->nullable();
            $table->string('instagram', 100)->nullable();
            $table->string('youtube', 100)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('travel_trangchu_');
    }
}
