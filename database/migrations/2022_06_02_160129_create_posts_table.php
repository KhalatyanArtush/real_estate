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
            $table->string('swimming')->nullable();
            $table->text('informations')->nullable();
            $table->string('lat');
            $table->string('long');
            $table->string('role')->default('users');
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

