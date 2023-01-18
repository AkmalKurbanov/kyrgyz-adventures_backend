<?php namespace Akmal\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAkmalEvents14 extends Migration
{
    public function up()
    {
        Schema::table('akmal_events_', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('slug', 191)->nullable()->change();
            $table->smallInteger('date')->nullable()->change();
            $table->text('title')->nullable()->change();
            $table->text('location')->nullable()->change();
            $table->text('content')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('akmal_events_', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->string('slug', 191)->nullable(false)->change();
            $table->smallInteger('date')->nullable(false)->change();
            $table->text('title')->nullable(false)->change();
            $table->text('location')->nullable(false)->change();
            $table->text('content')->nullable(false)->change();
        });
    }
}
