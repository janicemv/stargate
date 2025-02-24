<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Star;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('stars_symbols', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Star::class)->constrained()->cascadeOnDelete();
            $table->string('path');
            $table->string('description');
            $table->string('reference');
            $table->string('url')->nullable();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stars_symbols');
    }
};
