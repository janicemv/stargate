<?php

use App\Models\Keyword;
use App\Models\Star;
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
        Schema::create('star_keyword', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Star::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Keyword::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('star_keyword');
    }
};
