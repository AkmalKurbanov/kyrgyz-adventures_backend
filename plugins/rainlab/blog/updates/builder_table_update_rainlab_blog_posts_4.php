<?php namespace RainLab\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRainlabBlogPosts4 extends Migration
{
    public function up()
    {
        Schema::table('rainlab_blog_posts', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->boolean('published');
            $table->integer('user_id')->nullable()->change();
            $table->string('title', 191)->nullable()->change();
            $table->text('excerpt')->nullable()->change();
            $table->text('content')->nullable()->change();
            $table->text('content_html')->nullable()->change();
            $table->text('metadata')->nullable()->change();
            $table->string('seo_title', 10)->nullable()->change();
            $table->string('seo_description', 191)->nullable()->change();
            $table->string('seo_keywords', 191)->nullable()->change();
            $table->string('canonical_url', 191)->nullable()->change();
            $table->string('redirect_url', 191)->nullable()->change();
            $table->string('robot_index', 191)->nullable()->change();
            $table->string('robot_follow', 191)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('rainlab_blog_posts', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('published_at');
            $table->dropColumn('published');
            $table->integer('user_id')->nullable(false)->change();
            $table->string('title', 191)->nullable(false)->change();
            $table->text('excerpt')->nullable(false)->change();
            $table->text('content')->nullable(false)->change();
            $table->text('content_html')->nullable(false)->change();
            $table->text('metadata')->nullable(false)->change();
            $table->string('seo_title', 10)->nullable(false)->change();
            $table->string('seo_description', 191)->nullable(false)->change();
            $table->string('seo_keywords', 191)->nullable(false)->change();
            $table->string('canonical_url', 191)->nullable(false)->change();
            $table->string('redirect_url', 191)->nullable(false)->change();
            $table->string('robot_index', 191)->nullable(false)->change();
            $table->string('robot_follow', 191)->nullable(false)->change();
        });
    }
}
