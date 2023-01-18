<?php namespace Akmal\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAkmalEvents12 extends Migration
{
    public function up()
    {
        Schema::table('akmal_events_', function($table)
        {
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->string('slug', 191)->nullable(false)->default(null)->change();
            $table->smallInteger('date')->nullable(false)->default(null)->change();
            $table->text('title')->nullable(false)->default(null)->change();
            $table->text('location')->nullable(false)->default(null)->change();
            $table->text('content')->nullable(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('akmal_events_', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->string('slug', 191)->nullable()->default('\'null\'')->change();
            $table->smallInteger('date')->nullable()->default(NULL)->change();
            $table->text('title')->nullable()->default('NULL')->change();
            $table->text('location')->nullable()->default('NULL')->change();
            $table->text('content')->nullable()->default('NULL')->change();
        });
    }
}
