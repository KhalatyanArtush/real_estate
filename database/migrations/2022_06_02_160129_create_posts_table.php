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
            $table->unsignedBigInteger('agent_id')->nullable();
            $table->unsignedBigInteger('buy_rent_id')->nullable();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->unsignedBigInteger('village_id')->nullable();
            $table->unsignedBigInteger('region_id')->nullable();
            $table->unsignedBigInteger('street_id')->nullable();
            $table->unsignedBigInteger('district_id')->nullable();
            $table->unsignedBigInteger('type_id')->nullable();
            $table->unsignedBigInteger('building_type_id')->nullable();
            $table->unsignedBigInteger('currency_id')->nullable();
            $table->integer('sum')->nullable();
            $table->integer('building_number')->nullable();
            $table->integer('apartment_number')->nullable();
            $table->integer('floor')->nullable();
            $table->integer('room')->nullable();
            $table->string('swimming')->default(0);
            $table->string('tel')->nullable();
            $table->text('informations')->nullable();
            $table->string('map_city')->nullable();
            $table->string('map_street')->nullable();
            $table->string('map_number')->nullable();
            $table->integer('public')->default(1);
            $table->date('public_start')->nullable();
            $table->date('public_end')->nullable();
            $table->string('stock')->nullable();
//            $table->string('image_path');
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

