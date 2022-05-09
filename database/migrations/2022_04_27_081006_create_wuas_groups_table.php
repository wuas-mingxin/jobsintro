<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWuasGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wuas_groups', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->default(0);
            $table->string('group_name', 32)->default('');
            $table->string('group_title', 40)->default('');
            $table->string('avatar', 120)->default('wuas-content/uploads/images/d-group.jpg');
            $table->string('cover', 120)->default('wuas-content/uploads/images/d-group.jpg');
            $table->string('about', 550)->default('');
            $table->bigInteger('category')->default(0);
            $table->string('sub_category', 50)->default('');
            $table->enum('privacy', ['1','2'])->default(1);
            $table->enum('join_privacy', ['1','2'])->default(1);
            $table->enum('status', ['0','1'])->default(0);
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
        Schema::dropIfExists('wuas_groups');
    }
}
