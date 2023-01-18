<?php namespace Akmal\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAkmalEvents5 extends Migration
{
    public function up()
    {
        Schema::table('akmal_events_', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('akmal_events_', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
