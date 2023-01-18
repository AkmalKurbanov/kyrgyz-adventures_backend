<?php namespace Akmal\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAkmalEvents20 extends Migration
{
    public function up()
    {
        Schema::table('akmal_events_', function($table)
        {
            $table->integer('sort_order');
            $table->text('title')->default('null')->change();
            $table->text('location')->default('null')->change();
            $table->text('content')->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('akmal_events_', function($table)
        {
            $table->dropColumn('sort_order');
            $table->text('title')->default('NULL')->change();
            $table->text('location')->default('NULL')->change();
            $table->text('content')->default('NULL')->change();
        });
    }
}
