<?php

use App\Models\Star;
use App\Models\User;
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
        Schema::create('star_astronomies', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Star::class)->constrained()->cascadeOnDelete();
            $table->string('type');
            $table->text('description');
            $table->text('reference');
            $table->string('url')->nullable();
            $table->foreignIdFor(User::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('star_astronomies');
    }
};
