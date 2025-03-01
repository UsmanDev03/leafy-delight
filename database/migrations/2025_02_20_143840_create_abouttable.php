<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('about', function (Blueprint $table) {
            $table->id();
            $table->string('ban_img')->nullable();
            $table->string('ban_subtitle')->nullable();
            $table->string('ban_title')->nullable();
            
            $table->text('sec1_desc')->nullable();
            $table->string('sec1_link_text')->nullable();
            $table->string('sec1_counter1_title')->nullable();
            $table->integer('sec1_counter1_count')->nullable();
            $table->string('sec1_counter2_title')->nullable();
            $table->integer('sec1_counter2_count')->nullable();
            
            $table->string('sec2_img')->nullable();
            $table->string('sec2_video_url')->nullable();
            $table->string('sec2_title')->nullable();
            $table->text('sec2_desc')->nullable();
            $table->string('sec2_progress_title1')->nullable();
            $table->integer('sec2_progress_num')->nullable();
            $table->string('sec2_progress_title2')->nullable();
            $table->integer('sec2_progress_num2')->nullable();
            
            $table->string('sec2_card1title')->nullable();
            $table->text('sec2_card1desc')->nullable();
            $table->string('sec2_card2title')->nullable();
            $table->text('sec2_card2desc')->nullable();
            $table->string('sec2_card3title')->nullable();
            $table->text('sec2_card3desc')->nullable();
            $table->string('sec2_card4title')->nullable();
            $table->text('sec2_card4desc')->nullable();
            
            $table->string('sec3_title')->nullable();
            $table->text('sec3_desc')->nullable();
            $table->string('sec3_img')->nullable();
            $table->string('sec3_icon1_title')->nullable();
            $table->string('sec3_icon2_title')->nullable();
            $table->string('sec3_icon3_title')->nullable();
            $table->string('sec3_icon4_title')->nullable();
            $table->string('sec3_icon5_title')->nullable();
            $table->string('sec3_btn_txt')->nullable();
            
            $table->string('sec4_img')->nullable();
            $table->string('sec4_title')->nullable();
            $table->text('sec4_desc')->nullable();
            $table->string('sec4_subtitle')->nullable();
            $table->string('sec4_btn_txt')->nullable();
            $table->integer('sec4_exp_num')->nullable();
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('about');
    }
};
