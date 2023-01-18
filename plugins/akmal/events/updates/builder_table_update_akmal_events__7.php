<?php namespace Akmal\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAkmalEvents7 extends Migration
{
    public function up()
    {
        Schema::table('akmal_events_', function($table)
        {
            $table->text('title');
            $table->text('location');
            $table->text('content');
        });
    }
    
    public function down()
    {
        Schema::table('akmal_events_', function($table)
        {
            $table->dropColumn('title');
            $table->dropColumn('location');
            $table->dropColumn('content');
        });
    }
}
