<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('add_reviews', function (Blueprint $table) {
            $table->id();
            $table->string('sec1_title')->nullable();
            $table->string('sec1_subtitle')->nullable();
            $table->string('sec1_img')->nullable();
            $table->string('sec2_title')->nullable();
            $table->text('sec2_desc')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('add_reviews');
    }
};
