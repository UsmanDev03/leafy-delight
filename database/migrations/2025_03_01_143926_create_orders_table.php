<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('street_address');
            $table->string('apartment')->nullable();
            $table->string('zip_code');
            $table->string('phone');
            $table->string('email');
            $table->string('stripe_id')->nullable(); // For Stripe Payment ID
            $table->string('cart_items')->nullable(); // For Stripe Payment ID
            $table->string('sub_total')->nullable(); // For Stripe Payment ID
            $table->string('tax')->nullable(); // For Stripe Payment ID
            $table->string('delivery_charges')->nullable(); // For Stripe Payment ID
            $table->string('grand_total')->nullable(); // For Stripe Payment ID
            $table->string('status')->nullable(); // For Stripe Payment ID
            $table->timestamps(); // Created_at & Updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
