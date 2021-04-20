<?php namespace Travel\Trangchu\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTravelTrangchuSetting2 extends Migration
{
    public function up()
    {
        Schema::table('travel_trangchu_setting', function($table)
        {
            $table->string('title_seo', 500)->nullable();
            $table->text('description_seo')->nullable();
            $table->string('keyword_seo', 500)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('travel_trangchu_setting', function($table)
        {
            $table->dropColumn('title_seo');
            $table->dropColumn('description_seo');
            $table->dropColumn('keyword_seo');
        });
    }
}
