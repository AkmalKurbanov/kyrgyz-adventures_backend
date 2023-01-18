<?php namespace Akmal\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAkmalEvents10 extends Migration
{
    public function up()
    {
        Schema::table('akmal_events_', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('slug', 191)->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('akmal_events_', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->string('slug', 191)->default('NULL')->change();
        });
    }
}
