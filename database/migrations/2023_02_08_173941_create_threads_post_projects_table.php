<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('threads_post_projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            // $table->unsignedBigInteger('category_id');
            $table->string('project_title');
            $table->string('description');

            // $table->string('skills_requirement');
            $table->unsignedBigInteger('skills_id');
            $table->foreign('skills_id')->references('id')->on('skills')->onUpdate('cascade')->onDelete('cascade')->nullable();

            $table->string('offered_duration'); 
            $table->bigInteger('min_price');
            $table->bigInteger('max_price');
            $table->tinyInteger('status');
            // $table->unsignedBigInteger('chat_id');
            // $table->foreign('chat_id')->references('id')->on('chats')->onUpdate('cascade')->onDelete('cascade');
            // $table->timestamp('latest_reply_at')->nullable();
            $table->bigInteger('fix_price')->default(0);
            // $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('threads_post_projects');
    }
};