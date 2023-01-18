<?php namespace Akmal\Members\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAkmalMembersLocation3 extends Migration
{
    public function up()
    {
        Schema::table('akmal_members_location', function($table)
        {
            $table->boolean('display_city');
        });
    }
    
    public function down()
    {
        Schema::table('akmal_members_location', function($table)
        {
            $table->dropColumn('display_city');
        });
    }
}
