<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('sec1_title');
            $table->text('sec1_desc');
            $table->string('sec2_available_stock');
            $table->string('sec2_tags')->nullable();
            $table->string('sec3_img1')->nullable();
            $table->string('sec3_imgs')->nullable();
            $table->string('sec4_weight_price')->nullable();
            $table->string('sec5_tray_price')->nullable();
            $table->string('discount_price')->nullable();
            $table->string('slug');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};
