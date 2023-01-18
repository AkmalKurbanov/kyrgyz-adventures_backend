<?php namespace Akmal\Members\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAkmalMembersMembersLocation extends Migration
{
    public function up()
    {
        Schema::create('akmal_members_members_location', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('mamber_id');
            $table->integer('location_id');
            $table->primary(['mamber_id','location_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('akmal_members_members_location');
    }
}
