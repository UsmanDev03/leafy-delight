<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('growpage', function (Blueprint $table) {
            $table->id();
            $table->string('banner_title');
            $table->string('banner_subtitle');
            $table->string('ban_img');
            $table->string('sec1_title');
            $table->text('sec1_desc');
            $table->string('sec1_img');
            $table->string('sec2_subtitle');
            $table->string('sec2_title');
            $table->text('sec2_desc');
            $table->text('sec2_card_desc');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('growpage');
    }
};
