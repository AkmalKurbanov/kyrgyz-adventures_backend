<?php namespace Akmal\Members\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAkmalMembersLocation2 extends Migration
{
    public function up()
    {
        Schema::create('akmal_members_location', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('location_title');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('akmal_members_location');
    }
}
