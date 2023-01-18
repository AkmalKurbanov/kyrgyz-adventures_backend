<?php namespace Akmal\Members\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAkmalMembers8 extends Migration
{
    public function up()
    {
        Schema::table('akmal_members_', function($table)
        {
            $table->integer('location');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('akmal_members_', function($table)
        {
            $table->dropColumn('location');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
