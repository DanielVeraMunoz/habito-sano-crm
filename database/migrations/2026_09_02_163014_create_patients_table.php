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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('email')->unique()->nullable();
            $table->string('phone');
            $table->foreignId('assigned_to')->constrained('staff');
            $table->string('plan');
            $table->unsignedInteger('sessions_remaining')->default(0);
            $table->string('status')->default('activo');
            $table->text('notes')->nullable();
            $table->text('diet_plan')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
