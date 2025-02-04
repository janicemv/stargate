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
        Schema::create('star_names', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Star::class)->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->text('reference');
            $table->text('url')->nullable();
            $table->foreignIdFor(User::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('star_names');
    }
};
