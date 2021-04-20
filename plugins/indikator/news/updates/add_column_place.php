<?php namespace Indikator\News\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class AddNewFieldsToTable extends Migration
{
    public function up()
    {
        Schema::table('indikator_news_posts', function($table)
        {
            // $table->integer('place_id')->nullable();
            // $table->string('category_tour')->nullable();
        });
    }

    public function down()
    {
        Schema::table('indikator_news_posts', function($table)
        {
            $table->dropColumn('place_id');
            $table->dropColumn('category_tour');
        });
    }
}
