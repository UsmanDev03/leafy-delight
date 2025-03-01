<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('contactpage', function (Blueprint $table) {
            $table->id();
            $table->string('banner_title');
            $table->string('banner_subtitle');
            $table->string('ban_img');
            $table->string('sec1_img');
            $table->string('card_addr');
            $table->string('card_phone');
            $table->string('card_email');
            $table->text('card_workinghours');
            $table->string('card2_subtitle');
            $table->string('card2_title');
            $table->text('card2_desc');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contactpage');
    }
};
