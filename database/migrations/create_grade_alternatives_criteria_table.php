<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('grade_alternatives_criteria', function (Blueprint $table) {
            $table->id();
            $table->foreignId('alternative_id')->constrained('alternatives')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('criteria_id')->constrained('criteria')->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('grade');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('grade_alternatives_criteria');
    }
};
