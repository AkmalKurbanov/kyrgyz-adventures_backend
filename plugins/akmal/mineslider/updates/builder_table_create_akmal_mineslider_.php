<?php namespace Akmal\Mineslider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAkmalMineslider extends Migration
{
    public function up()
    {
        Schema::create('akmal_mineslider_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('title');
            $table->text('description');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('akmal_mineslider_');
    }
}
