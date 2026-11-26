<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Repair legacy schema differences on a fresh demo installation.
     * All additions are nullable or have safe defaults and existing rows remain.
     */
    public function up(): void
    {
        if (Schema::hasTable('users')) {
            $columns = [
                'staff_id' => fn (Blueprint $t) => $t->string('staff_id')->nullable(),
                'first_name' => fn (Blueprint $t) => $t->string('first_name')->nullable(),
                'last_name' => fn (Blueprint $t) => $t->string('last_name')->nullable(),
                'father_name' => fn (Blueprint $t) => $t->string('father_name')->nullable(),
                'mother_name' => fn (Blueprint $t) => $t->string('mother_name')->nullable(),
                'gender' => fn (Blueprint $t) => $t->string('gender', 20)->nullable(),
                'role_id' => fn (Blueprint $t) => $t->unsignedBigInteger('role_id')->nullable(),
                'attach' => fn (Blueprint $t) => $t->text('attach')->nullable(),
                'is_admin' => fn (Blueprint $t) => $t->boolean('is_admin')->default(false),
                'password_text' => fn (Blueprint $t) => $t->text('password_text')->nullable(),
            ];
            foreach ($columns as $column => $definition) {
                if (!Schema::hasColumn('users', $column)) {
                    Schema::table('users', function (Blueprint $table) use ($definition) {
                        $definition($table);
                    });
                }
            }
        }

        if (Schema::hasTable('donors') && !Schema::hasColumn('donors', 'name')) {
            Schema::table('donors', function (Blueprint $table) {
                $table->string('name')->nullable();
            });
        }
    }

    public function down(): void
    {
        // Deliberately non-destructive: legacy user/donor data may depend on
        // these fields, so rolling back must not erase account information.
    }
};
