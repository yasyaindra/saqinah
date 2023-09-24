<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignId('user_id')->nullable();
            $table->string('name_male')->nullable();
            $table->string('name_female')->nullable();
            $table->string('slug')->nullable();
            $table->date('date')->nullable();
            $table->string('couple_photo')->nullable();
            $table->longText('venue_url')->nullable();
            $table->longText('venue_iframe')->nullable();
            $table->string('reception_address')->nullable();
            $table->time('reception_time')->nullable();
            $table->string('wedding_address')->nullable();
            $table->time('wedding_time')->nullable();
            $table->longText('our_story')->nullable();
            $table->string('first_our_story_photo')->nullable();
            $table->string('second_our_story_photo')->nullable();
            $table->string('horizontal_photo')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('music_file')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contents');
    }
};
