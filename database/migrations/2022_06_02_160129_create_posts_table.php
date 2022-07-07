<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('title');
            $table->string('agent');
            $table->string('sum');
            $table->string('buy_rent');
            $table->string('country');
            $table->string('region')->nullable();
            $table->string('type')->nullable();
            $table->string('building_type')->nullable();
            $table->integer('floor')->nullable();
            $table->integer('room');
            $table->string('swimming')->default(0);
            $table->text('informations')->nullable();
            $table->integer('public')->default(1);
            $table->string('lat');
            $table->string('long');
            $table->string('image_path');
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
        Schema::dropIfExists('posts');
    }
}

