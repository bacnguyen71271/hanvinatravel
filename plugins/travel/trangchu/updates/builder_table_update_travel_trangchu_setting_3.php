<?php namespace Travel\Trangchu\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTravelTrangchuSetting3 extends Migration
{
    public function up()
    {
        Schema::table('travel_trangchu_setting', function($table)
        {
            $table->string('image_share', 100)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('travel_trangchu_setting', function($table)
        {
            $table->dropColumn('image_share');
        });
    }
}
