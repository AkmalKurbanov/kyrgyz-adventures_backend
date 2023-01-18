<?php namespace Akmal\Members\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAkmalMembersMembersLocation extends Migration
{
    public function up()
    {
        Schema::table('akmal_members_members_location', function($table)
        {
            $table->dropPrimary(['mamber_id','location_id']);
            $table->renameColumn('mamber_id', 'member_id');
            $table->primary(['member_id','location_id']);
        });
    }
    
    public function down()
    {
        Schema::table('akmal_members_members_location', function($table)
        {
            $table->dropPrimary(['member_id','location_id']);
            $table->renameColumn('member_id', 'mamber_id');
            $table->primary(['mamber_id','location_id']);
        });
    }
}
