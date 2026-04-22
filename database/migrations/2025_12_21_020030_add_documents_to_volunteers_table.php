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
    Schema::table('volunteers', function (Blueprint $table) {
        $table->string('aadhaar_path')->nullable();
        $table->string('pan_path')->nullable();
        $table->string('photo_path')->nullable();
    });
}

public function down(): void
{
    Schema::table('volunteers', function (Blueprint $table) {
        $table->dropColumn(['aadhaar_path', 'pan_path', 'photo_path']);
    });
}

};
