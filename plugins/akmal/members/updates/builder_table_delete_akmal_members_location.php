<?php namespace Akmal\Members\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteAkmalMembersLocation extends Migration
{
    public function up()
    {
        Schema::dropIfExists('akmal_members_location');
    }
    
    public function down()
    {
        Schema::create('akmal_members_location', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('loc_title', 191);
            $table->string('slug', 191);
        });
    }
}
