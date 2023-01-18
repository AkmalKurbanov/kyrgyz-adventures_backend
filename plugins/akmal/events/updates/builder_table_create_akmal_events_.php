<?php namespace Akmal\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAkmalEvents extends Migration
{
    public function up()
    {
        Schema::create('akmal_events_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->dateTime('date');
            $table->text('title');
            $table->text('location');
            $table->text('content');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('akmal_events_');
    }
}
