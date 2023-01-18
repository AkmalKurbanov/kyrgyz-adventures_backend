<?php namespace Akmal\Members\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAkmalMembersLocation5 extends Migration
{
    public function up()
    {
        Schema::table('akmal_members_location', function($table)
        {
            $table->text('display_city')->nullable(false)->unsigned(false)->default(null)->change();
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('akmal_members_location', function($table)
        {
            $table->boolean('display_city')->nullable(false)->unsigned(false)->default(null)->change();
            $table->timestamp('created_at')->nullable()->default('NULL');
            $table->timestamp('updated_at')->nullable()->default('NULL');
        });
    }
}
