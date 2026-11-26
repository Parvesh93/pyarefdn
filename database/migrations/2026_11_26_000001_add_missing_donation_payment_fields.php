<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * The original donations migration predates the columns used by the
     * current dashboard and payment controllers. This migration is additive
     * and does not delete or overwrite any existing records.
     */
    public function up(): void
    {
        if (Schema::hasTable('donations')) {
            if (!Schema::hasColumn('donations', 'payment_status')) {
                Schema::table('donations', function (Blueprint $table) {
                    $table->string('payment_status', 30)->default('pending')->index();
                });
            }

            if (!Schema::hasColumn('donations', 'order_id')) {
                Schema::table('donations', function (Blueprint $table) {
                    $table->string('order_id')->nullable()->index();
                });
            }
        }
    }

    public function down(): void
    {
        if (Schema::hasTable('donations')) {
            if (Schema::hasColumn('donations', 'order_id')) {
                Schema::table('donations', function (Blueprint $table) {
                    $table->dropColumn('order_id');
                });
            }
            if (Schema::hasColumn('donations', 'payment_status')) {
                Schema::table('donations', function (Blueprint $table) {
                    $table->dropColumn('payment_status');
                });
            }
        }
    }
};
