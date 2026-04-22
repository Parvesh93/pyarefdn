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
       Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('donor_id')->constrained();
                  // yahi kaafi hai ✅

            $table->string('name');
            $table->decimal('amount', 10, 2);
            $table->string('email')->unique();
            $table->string('contact')->nullable();
            $table->string('given_method')->nullable();
            $table->string('campaign')->default('General')->nullable();
            $table->text('address')->nullable();
            $table->string('payment_id')->nullable();  // Razorpay Payment ID
            $table->string('payment_method')->nullable();
            $table->date('payment_date')->nullable();
            $table->boolean('status')->default('1');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};
