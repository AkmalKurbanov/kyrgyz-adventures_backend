<?php namespace RainLab\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRainlabBlogPosts3 extends Migration
{
    public function up()
    {
        Schema::table('rainlab_blog_posts', function($table)
        {
            $table->string('seo_description');
            $table->string('seo_keywords');
            $table->string('canonical_url');
            $table->string('redirect_url');
            $table->string('robot_index');
            $table->string('robot_follow');
            $table->string('seo_title', 10)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('rainlab_blog_posts', function($table)
        {
            $table->dropColumn('seo_description');
            $table->dropColumn('seo_keywords');
            $table->dropColumn('canonical_url');
            $table->dropColumn('redirect_url');
            $table->dropColumn('robot_index');
            $table->dropColumn('robot_follow');
            $table->smallInteger('seo_title')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
