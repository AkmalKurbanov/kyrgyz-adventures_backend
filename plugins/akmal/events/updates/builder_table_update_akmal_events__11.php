<?php namespace Akmal\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAkmalEvents11 extends Migration
{
    public function up()
    {
        Schema::table('akmal_events_', function($table)
        {
            $table->string('slug', 191)->default('null')->change();
            $table->smallInteger('date')->nullable()->change();
            $table->text('title')->nullable()->change();
            $table->text('location')->nullable()->change();
            $table->text('content')->nullable()->change();
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('akmal_events_', function($table)
        {
            $table->string('slug', 191)->default('\'null\'')->change();
            $table->smallInteger('date')->nullable(false)->change();
            $table->text('title')->nullable(false)->change();
            $table->text('location')->nullable(false)->change();
            $table->text('content')->nullable(false)->change();
            $table->timestamp('created_at')->nullable()->default('NULL');
            $table->timestamp('updated_at')->nullable()->default('NULL');
        });
    }
}
