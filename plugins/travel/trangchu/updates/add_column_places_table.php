<?php namespace Travel\Trangchu\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class AddColumnCategory extends Migration
{
    public function up()
    {
        Schema::table('places', function (Blueprint $table) {
            $table->integer('category_id');
        });
    }

    public function down()
    {
    }
}
