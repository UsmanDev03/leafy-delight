<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('sec1_title');
            $table->date('sec1_date');
            $table->string('sec1_img');

            $table->text('sec2_card_desc');
            $table->string('sec2_card_name');

            $table->string('sec3_title');
           
            $table->text('sec3_desc');
            $table->string('slug');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
