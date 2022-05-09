<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWuasPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wuas_posts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->default(0);
            $table->bigInteger('recipient_id')->default(0);
            $table->text('post_text')->nullable();
            $table->bigInteger('page_id')->default(0);
            $table->bigInteger('group_id')->default(0);
            $table->bigInteger('event_id')->default(0);
            $table->bigInteger('page_event_id')->default(0);
            $table->string('pageLink', 1000)->nullable();
            $table->text('pageLinkTitle')->nullable();
            $table->string('pageLinkImage', 100)->nullable();
            $table->text('pageLinkContent')->nullable();
            $table->string('post_vimeo', 100)->nullable();
            $table->string('post_dailymotion', 100)->nullable();
            $table->string('post_facebook', 100)->nullable();
            $table->string('post_file')->nullable();
            $table->string('post_file_name', 200)->nullable();
            $table->string('post_file_thumb', 3000)->nullable();
            $table->string('post_youtube')->nullable();
            $table->string('post_vine', 32)->nullable();
            $table->string('post_sound_cloud')->nullable();
            $table->string('post_playtube', 500)->nullable();
            $table->string('post_deepsound', 500)->nullable();
            $table->string('post_map')->nullable();
            $table->bigInteger('post_share_id')->default(0);
            $table->enum('post_privacy', ['1','2','3','4','5'])->default(1);
            $table->string('post_type', 30)->nullable();
            $table->string('post_feeling')->nullable();
            $table->string('post_listening')->nullable();
            $table->string('post_traveling')->nullable();
            $table->string('post_watching')->nullable();
            $table->string('post_playing')->nullable();
            $table->string('post_photo', 3000)->nullable();
            $table->bigInteger('post_time_id')->default(0);
            $table->string('album_name', 52)->nullable();
            $table->enum('multi_image', ['0','1'])->default(0)->comment('0: no multi images, 1: user has access to multi images');
            $table->bigInteger('multi_image_post_id')->default(0);
            $table->bigInteger('boost_id')->default(0);
            $table->bigInteger('product_id')->default(0);
            $table->bigInteger('poll_id')->default(0);
            $table->bigInteger('blog_id')->default(0);
            $table->bigInteger('forum_id')->default(0);
            $table->bigInteger('thread_id')->default(0);
            $table->bigInteger('video_views_id')->default(0);
            $table->string('post_record', 3000)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wuas_posts');
    }
}
