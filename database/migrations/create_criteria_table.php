<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('criteria', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('weight');
            $table->boolean('benefited'); // 1 = benefit, 0 = cost
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('criteria');
    }
};
