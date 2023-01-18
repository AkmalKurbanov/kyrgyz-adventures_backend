<?php namespace Akmal\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAkmalEvents6 extends Migration
{
    public function up()
    {
        Schema::table('akmal_events_', function($table)
        {
            $table->smallInteger('date');
        });
    }
    
    public function down()
    {
        Schema::table('akmal_events_', function($table)
        {
            $table->dropColumn('date');
        });
    }
}
