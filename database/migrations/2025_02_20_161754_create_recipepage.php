<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('recipe_pages', function (Blueprint $table) {
            $table->id();
            $table->string('ban_img');
            $table->string('ban_subttitle');
            $table->string('ban_title');
            
            $table->string('sec1_card1_title');
            $table->string('sec1_card1_img');
            $table->text('sec1_card1_desc');
            
            $table->string('sec1_card2_title');
            $table->string('sec1_card2_img');
            $table->text('sec1_card2_desc');
            
            $table->string('sec3_subtitle');
            $table->string('sec3_title');
            $table->text('sec3_desc');
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('recipe_pages');
    }
};
