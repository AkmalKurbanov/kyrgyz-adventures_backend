<?php namespace Akmal\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAkmalEvents30 extends Migration
{
    public function up()
    {
        Schema::table('akmal_events_', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->text('title')->default('null')->change();
            $table->text('location')->default('null')->change();
            $table->text('content')->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('akmal_events_', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->text('title')->default('NULL')->change();
            $table->text('location')->default('NULL')->change();
            $table->text('content')->default('NULL')->change();
        });
    }
}
