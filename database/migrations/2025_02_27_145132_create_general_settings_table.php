<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();
            $table->string('sec1_title')->nullable();
            $table->string('sec1_phone')->nullable();
            $table->string('sec1_email')->nullable();
            $table->text('sec1_address')->nullable();
            $table->string('sec1_timing')->nullable();

            $table->string('sec2_social_link1')->nullable();
            $table->string('sec2_social_link2')->nullable();
            $table->string('sec2_social_link3')->nullable();
            $table->string('sec2_social_link4')->nullable();
            $table->string('sec2_social_link5')->nullable();

            $table->string('sec3_logo')->nullable(); // For storing image path
            $table->string('sec3_logo2')->nullable(); // For storing image path
            $table->string('sec3_title')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('general_settings');
    }
};
