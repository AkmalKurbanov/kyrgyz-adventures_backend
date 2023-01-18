<?php namespace Akmal\Members\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAkmalMembers3 extends Migration
{
    public function up()
    {
        Schema::table('akmal_members_', function($table)
        {
            $table->text('status');
        });
    }
    
    public function down()
    {
        Schema::table('akmal_members_', function($table)
        {
            $table->dropColumn('status');
        });
    }
}
