<?php namespace Travel\Slide\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTravelSlide extends Migration
{
    public function up()
    {
        Schema::table('travel_slide_', function($table)
        {
            $table->string('link', 500)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('travel_slide_', function($table)
        {
            $table->dropColumn('link');
        });
    }
}
