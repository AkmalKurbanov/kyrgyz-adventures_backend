<?php namespace Akmal\Mineslider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAkmalMineslider2 extends Migration
{
    public function up()
    {
        Schema::table('akmal_mineslider_', function($table)
        {
            $table->text('link');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('akmal_mineslider_', function($table)
        {
            $table->dropColumn('link');
            $table->timestamp('created_at')->nullable()->default('NULL');
            $table->timestamp('updated_at')->nullable()->default('NULL');
        });
    }
}
