<?php namespace RainLab\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRainlabBlogPosts extends Migration
{
    public function up()
    {
        Schema::table('rainlab_blog_posts', function($table)
        {
            $table->integer('user_id')->nullable(false)->default(null)->change();
            $table->string('title', 191)->nullable(false)->default(null)->change();
            $table->text('excerpt')->nullable(false)->default(null)->change();
            $table->text('content')->nullable(false)->default(null)->change();
            $table->text('content_html')->nullable(false)->default(null)->change();
            $table->text('metadata')->nullable(false)->default(null)->change();
            $table->dropColumn('published_at');
            $table->dropColumn('published');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('rainlab_blog_posts', function($table)
        {
            $table->integer('user_id')->nullable()->default(NULL)->change();
            $table->string('title', 191)->nullable()->default('NULL')->change();
            $table->text('excerpt')->nullable()->default('NULL')->change();
            $table->text('content')->nullable()->default('NULL')->change();
            $table->text('content_html')->nullable()->default('NULL')->change();
            $table->text('metadata')->nullable()->default('NULL')->change();
            $table->timestamp('published_at')->nullable()->default('NULL');
            $table->boolean('published')->default(0);
            $table->timestamp('created_at')->nullable()->default('NULL');
            $table->timestamp('updated_at')->nullable()->default('NULL');
        });
    }
}
