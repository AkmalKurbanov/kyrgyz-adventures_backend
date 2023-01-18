<?php namespace Akmal\Members\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAkmalMembersMembersLocation2 extends Migration
{
    public function up()
    {
        Schema::table('akmal_members_members_location', function($table)
        {
            $table->dropPrimary(['member_id','location_id']);
        });
    }
    
    public function down()
    {
        Schema::table('akmal_members_members_location', function($table)
        {
            $table->primary(['member_id','location_id']);
        });
    }
}
