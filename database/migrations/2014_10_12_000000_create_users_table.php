<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname', 60)->nullable();
            $table->string('lastname', 60)->nullable();
            $table->string('name', 60)->nullable();
            $table->string('username', 32);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('avtar', 600)->default('wuas-content/upload/images/d-avatar.jpg')->comment('wuas-content/upload/images/d-avatar.jpg');
            $table->string('cover', 600)->default('wuas-content/upload/images/d-cover.jpg')->comment('wuas-content/upload/images/d-cover.jpg');
            $table->string('background_image', 600)->default('wuas-content/upload/images/d-cover.jpg')->comment('wuas-content/upload/images/d-cover.jpg');
            $table->enum('background_image_status', ['0','1'])->default(0);
            $table->bigInteger('relationship_id')->default(0);
            $table->string('address', 150)->nullable();
            $table->string('working', 32)->nullable();
            $table->string('working_link', 32)->nullable();
            $table->text('about')->nullable();
            $table->string('school', 32)->nullable();
            $table->integer('gender')->default(0);
            $table->string('birthday', 50)->default('0000-00-00');
            $table->string('country', 10)->default(0);
            $table->string('website', 50)->nullable();
            $table->string('facebook', 50)->nullable();
            $table->string('twitter', 50)->nullable();
            $table->string('linkedin', 32)->nullable();
            $table->string('youtube', 100)->nullable();
            $table->string('vk', 32)->nullable();
            $table->string('instagram', 32)->nullable();
            $table->text('qq')->nullable();
            $table->text('wechat')->nullable();
            $table->text('discord')->nullable();
            $table->text('mailru')->nullable();
            $table->string('okru', 30)->nullable();
            $table->string('language', 31)->default('english');
            $table->string('email_code', 32)->nullable();
            $table->string('src', 32)->default('Undefined');
            $table->string('ip_address', 32)->nullable();
            $table->enum('follow_privacy', ['0','1'])->default(0)->comment('Who can follow me? 0: Everyone, 1: People I Follow');
            $table->enum('friend_privacy', ['0','1','2','3'])->default(0)->comment('Who can see my friends? 0: Everyone, 1: People I Follow, 2: People Follow Me, 3: No body');
            $table->enum('post_privacy', ['0','1'])->default(1)->comment('Who can post on my timeline? 0: Everyone, 1: People I Follow, 2: No body');
            $table->enum('message_privacy', ['0','1','2'])->default(0)->comment('Whow can messages me? 0: Everyone, 1: People I Follow, 2: No body');
            $table->enum('confirm_followers', ['0','1'])->default(0)->comment('Confirm request when someone follows you? 0: No, 1: Yes');
            $table->enum('show_activities_privacy', ['0','1'])->default(1)->comment('Show my activies? 0: No, 1: Yes');
            $table->enum('birth_privacy', ['0','1','2'])->default(0)->comment('Who can see my birthday? 0: Everyone, 1: People I Follow, 2: No body');
            $table->enum('visit_privacy', ['0','1'])->default(0);
            $table->enum('verified', ['0','1'])->default(0);
            $table->integer('lastseen')->default(0);
            $table->enum('showlastseen', ['0','1'])->default(1);
            $table->enum('email_notification', ['0','1'])->default(1);
            $table->enum('e_like', ['0','1'])->default(1)->comment('Email Notification of someone liked my posts');
            $table->enum('e_wondered', ['0','1'])->default(1);
            $table->enum('e_shared', ['0','1'])->default(1)->comment('Email Notification of someone shared my posts');
            $table->enum('e_followed', ['0','1'])->default(1)->comment('Email Notification of someone followed me');
            $table->enum('e_commented', ['0','1'])->default(1)->comment('Email Notification of someone commented on my posts');
            $table->enum('e_visited', ['0','1'])->default(1)->comment('Email Notification of someone visit my profile');
            $table->enum('e_liked_page', ['0','1'])->default(1)->comment('Email Notification of someone liked my pages');
            $table->enum('e_mentioned', ['0','1'])->default(1)->comment('Email Notification of someone mentioned me');
            $table->enum('e_joined_group', ['0','1'])->default(1)->comment('Email Notification of someone joined my groups');
            $table->enum('e_accepted', ['0','1'])->default(1)->comment('Email Notification of someone accepted my friend/follow request');
            $table->enum('e_profile_wall_post', ['0','1'])->default(1)->comment('Email Notification of someone posted on my timeline');
            $table->enum('e_memory', ['0','1'])->default(1)->comment('Email Notification of you have rememberance on this day');
            $table->enum('e_sentme_msg', ['0','1'])->default(0);
            $table->string('e_last_notif', 50)->default(0);
            $table->string('notification_settings', 400)->default('{"e_liked":1,"e_shared":1,"e_wondered":0,"e_commented":1,"e_followed":1,"e_accepted":1,"e_mentioned":1,"e_joined_group":1,"e_liked_page":1,"e_visited":1,"e_profile_wall_post":1,"e_memory":1}');
            $table->enum('status', ['0','1'])->default(0)->comment('Chat status.. 0: Online, 1: Offline');
            $table->enum('active', ['0','1','2'])->default(0);
            $table->string('type', 11)->default('user');
            $table->enum('strat_up', ['0','1'])->default(0);
            $table->enum('strat_up_info', ['0','1'])->default(0);
            $table->enum('stratup_follow', ['0','1'])->default(0);
            $table->enum('stratup_image', ['0','1'])->default(0);
            $table->integer('last_email_sent')->default(0);
            $table->string('phone', 32)->nullable();
            $table->integer('sms_code')->default(0);
            $table->enum('is_pro', ['0','1'])->default(0);
            $table->integer('pro_time')->default(0);
            $table->enum('pro_type', ['0','1','2','3','4'])->default(0);
            $table->integer('joined')->default(0);
            $table->string('css_file', 100)->nullable();
            $table->string('timezone', 50)->nullable();
            $table->integer('referrer')->default(0);
            $table->integer('ref_user_id')->default(0);
            $table->text('ref_level')->nullable();
            $table->decimal('balance', 18,8)->default('0.00000000');
            $table->string('paypal_email', 100)->nullable();
            $table->enum('notifications_sound', ['0','1'])->default(0);
           
            $table->enum('order_posts_by', ['0','1'])->default(1);
            $table->enum('social_login', ['0','1'])->default(0);
            $table->string('android_m_device_id', 50)->nullable();
            $table->string('ios_m_device_id', 50)->nullable();
            $table->string('android_n_device_id', 50)->nullable();
            $table->string('ios_n_device_id', 50)->nullable();
            $table->string('web_device_id', 100)->nullable();
            $table->decimal('wallet', 18,8)->default(0.00000000);
            $table->string('last_location_update', 30)->default(0);
            $table->integer('share_my_location')->default(1)->comment('Show my location with public? 0: No, 1: Yes');
            $table->integer('last_data_update')->default(0);
            $table->string('details', 300)->default('{"post_count":0,"album_count":0,"following_count":0,"followers_count":0,"groups_count":0,"likes_count":0}');
            $table->text('sidebar_data', 300)->nullable();
            $table->integer('last_avatar_mod')->default(0);
            $table->integer('last_cover_mod')->default(0);
            $table->float('points')->unsigned()->default(0);
            $table->integer('daily_points')->default(0);
            $table->string('point_day_expire', 50)->nullable();
            $table->integer('last_follow_id')->default(0);
            $table->integer('share_my_data')->default(1)->comment('Allow search engines to index my profile and posts? 0: No, 1: Yes');
            $table->text('last_login_data')->nullable();
            $table->integer('two_factor')->default(0)->comment('0: Disable, 1: Enable');
            $table->string('new_email')->nullable();
            $table->integer('two_factor_verified')->default(0);
            $table->string('new_phone', 32)->nullable();
            $table->string('info_file', 300)->nullable();
            $table->string('city', 50)->nullable();
            $table->string('state', 50)->nullable();
            $table->string('zip', 11)->nullable();
            $table->integer('school_completed')->default(0);
            $table->string('weather_unit', 11)->default('us');
            $table->string('paystack_ref', 100)->nullable();
            $table->integer('code_sent')->default(0);
            $table->text('StripeSessionId')->nullable();
            $table->integer('time_code_sent')->default(0);
            $table->text('permission')->nullable();
            $table->text('skills')->nullable();
            $table->text('languages')->nullable();
            $table->string('currently_working', 50)->nullable();
            $table->integer('banned')->default(0);
            $table->string('banned_reason', 500)->nullable();
            $table->string('coinbase_hash', 20)->nullable();
            $table->string('coinbase_code', 20)->nullable();
            $table->string('yoomoney_hash', 20)->nullable();
            $table->bigInteger('conversation_id')->default(0);
            $table->string('securionpay_key', 20)->nullable();
            $table->enum('account_status', ['0', '1', '2'])->default(0)->comment('0: Account status is pending, 1: Active, 2: Disabled');
            $table->rememberToken();
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('users');
    }
}
