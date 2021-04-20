<?php namespace Travel\Contact\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTravelContact extends Migration
{
    public function up()
    {
        Schema::table('travel_contact_', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('email', 100)->default('null')->change();
            $table->string('phone', 20)->default('null')->change();
            $table->text('content')->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('travel_contact_', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->string('email', 100)->default('\'null\'')->change();
            $table->string('phone', 20)->default('\'null\'')->change();
            $table->text('content')->default('NULL')->change();
        });
    }
}
