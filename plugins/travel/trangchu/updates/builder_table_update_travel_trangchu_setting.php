<?php namespace Travel\Trangchu\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTravelTrangchuSetting extends Migration
{
    public function up()
    {
        Schema::table('travel_trangchu_setting', function($table)
        {
            $table->text('highlight_post')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('travel_trangchu_setting', function($table)
        {
            $table->dropColumn('highlight_post');
        });
    }
}
