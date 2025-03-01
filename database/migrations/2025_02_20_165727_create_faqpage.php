<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('faqpage', function (Blueprint $table) {
            $table->id();
            $table->string('ban_img')->nullable();
            $table->string('ban_subttitle')->nullable();
            $table->string('ban_title')->nullable();
            $table->string('sec1_title')->nullable();
            $table->text('sec1_desc')->nullable();
            $table->string('sec1_btn_txt')->nullable();
            $table->string('sec2_title')->nullable();
            $table->text('sec2_desc')->nullable();
            $table->string('loc')->nullable();
            $table->string('phone')->nullable();
            $table->string('mail')->nullable();
            $table->string('timing')->nullable();
            $table->string('sec3_subtitle')->nullable();
            $table->string('sec3_title')->nullable();
            $table->string('sec3_btn_txt')->nullable();
            $table->string('sec3_img')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('faqpage');
    }
};

