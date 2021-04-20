<?php namespace Indikator\News\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class AddCategoryFieldToTable extends Migration
{
    public function up()
    {
        Schema::table('indikator_news_posts', function($table)
        {
            $table->integer('price')->default(0);
            $table->integer('show_on_home')->default(0);
        });
    }

    public function down()
    {
        Schema::table('indikator_news_posts', function($table)
        {
            $table->dropColumn('price');
            $table->dropColumn('show_on_home');
        });
    }
}
