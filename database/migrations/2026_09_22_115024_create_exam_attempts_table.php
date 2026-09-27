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
    Schema::create('exam_attempts', function (Blueprint $table) {
        $table->id();

        $table->foreignId('user_id')
            ->constrained()
            ->cascadeOnDelete();

        $table->foreignId('exam_id')
            ->constrained('exams')
            ->cascadeOnDelete();

        $table->timestamp('started_at');
        $table->timestamp('submitted_at')->nullable();

        $table->unsignedInteger('score')->default(0);

        $table->enum('status', [
            'in_progress',
            'submitted',
            'expired'
        ])->default('in_progress');

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam_attempts');
    }
};
