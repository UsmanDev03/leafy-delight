<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('homepages', function (Blueprint $table) {
            $table->id();
            
            // Section 1
            $table->string('sec1_card1_img')->nullable();
            $table->string('sec1_card1_title')->nullable();
            $table->text('sec1_card1_desc')->nullable();
            $table->string('sec1_card2_img')->nullable();
            $table->string('sec1_card2_title')->nullable();
            $table->text('sec1_card2_desc')->nullable();
            $table->string('sec1_card3_img')->nullable();
            $table->string('sec1_card3_title')->nullable();
            $table->text('sec1_card3_desc')->nullable();
            
            // Section 2
            $table->string('sec2_subttitle')->nullable();
            $table->string('sec2_title')->nullable();
            $table->text('sec2_desc')->nullable();
            $table->string('sec2_img')->nullable();
            $table->string('sec2_btn_txt')->nullable();
            $table->string('sec2_card1_subtitle')->nullable();
            $table->string('sec2_card1_title')->nullable();
            $table->text('sec2_card1_desc')->nullable();
            $table->string('sec2_card2_title')->nullable();
            $table->string('sec2_card2_title2')->nullable();
            
            // Section 3
            $table->string('sec3_subttitle')->nullable();
            $table->string('sec3_title')->nullable();
            $table->text('sec3_desc')->nullable();
            $table->string('sec3_img')->nullable();
            $table->string('sec3_btn_txt')->nullable();
            $table->string('sec3_card1_title')->nullable();
            $table->text('sec3_card1_desc')->nullable();
            $table->string('sec3_card2_title')->nullable();
            $table->text('sec3_card2_desc')->nullable();
            $table->string('sec3_card3_title')->nullable();
            $table->text('sec3_card3_desc')->nullable();
            
            // Section 4
            $table->string('sec4_subttitle')->nullable();
            $table->string('sec4_title')->nullable();
            $table->text('sec4_desc')->nullable();
            $table->string('sec4_img')->nullable();
            $table->string('sec4_btn_txt')->nullable();
            
            // Section 5
            $table->string('sec5_subttitle')->nullable();
            $table->string('sec5_title')->nullable();
            $table->text('sec5_desc')->nullable();
            $table->string('sec5_img')->nullable();
            $table->string('sec5_img2')->nullable();
            $table->string('sec5_btn_txt')->nullable();
            
            // Counters
            $table->integer('counter1_num')->nullable();
            $table->string('counter1_text')->nullable();
            $table->integer('counter2_num')->nullable();
            $table->string('counter2_text')->nullable();
            $table->integer('counter3_num')->nullable();
            $table->string('counter3_text')->nullable();
            $table->integer('counter4_num')->nullable();
            $table->string('counter4_text')->nullable();
            
            // Section 6
            $table->string('sec6_title')->nullable();
            $table->string('sec6_img')->nullable();
            
            // FAQ Section
            $table->string('faq_subttitle')->nullable();
            $table->string('faq_title')->nullable();
            $table->text('faq_desc')->nullable();
            $table->string('faq_img')->nullable();
            $table->string('faq_btn_txt')->nullable();
            
            // Delivery Section
            $table->string('delivery_subttitle')->nullable();
            $table->string('delivery_title')->nullable();
            $table->string('delivery_img')->nullable();
            $table->text('delivery_desc')->nullable();
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('homepages');
    }
};
