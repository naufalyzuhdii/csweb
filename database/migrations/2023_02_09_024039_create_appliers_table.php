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
        Schema::create('appliers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('apply_price');
            $table->string('description');
            $table->tinyInteger('status');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('threads_post_projects_id');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('threads_post_projects_id')->references('id')->on('threads_post_projects')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('appliers');
    }
};
