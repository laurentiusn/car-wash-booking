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
        Schema::create('booking', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('id_car')->constrained('car')->cascadeOnDelete();
            $table->foreignUuid('id_branch')->constrained('branch')->cascadeOnDelete();
            $table->dateTime('tanggal_waktu');
            $table->enum('status', ['dijadwalkan', 'dikerjakan', 'selesai', 'dibatalkan'])->default('dijadwalkan');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};
