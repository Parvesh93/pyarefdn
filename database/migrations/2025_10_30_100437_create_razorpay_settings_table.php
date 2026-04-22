<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('razorpay_settings', function (Blueprint $table) {
            $table->id();
            // API credentials
            $table->string('razorpay_key_id')->nullable();
            $table->string('razorpay_key_secret')->nullable();

            $table->string('country')->nullable();
            $table->decimal('currency_rate', 10, 2)->default(1.00);

            // Mode: test or live
            $table->enum('mode', ['test', 'live'])->default('test');

            // Webhook secret (optional)
            $table->string('webhook_secret')->nullable();

            // Whether Razorpay is enabled or not
            $table->boolean('status')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('razorpay_settings');
    }
};
