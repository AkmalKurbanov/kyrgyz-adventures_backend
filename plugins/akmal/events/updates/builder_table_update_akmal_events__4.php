<?php namespace Akmal\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAkmalEvents4 extends Migration
{
    public function up()
    {
        Schema::table('akmal_events_', function($table)
        {
            $table->dropColumn('date');
            $table->dropColumn('title');
            $table->dropColumn('location');
            $table->dropColumn('content');
            $table->dropColumn('slug');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('akmal_events_', function($table)
        {
            $table->dateTime('date');
            $table->text('title');
            $table->text('location');
            $table->text('content');
            $table->string('slug', 191)->nullable()->default('\'null\'');
            $table->timestamp('created_at')->nullable()->default('NULL');
            $table->timestamp('updated_at')->nullable()->default('NULL');
        });
    }
}
