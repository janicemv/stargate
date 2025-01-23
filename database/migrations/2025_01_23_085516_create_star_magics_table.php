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
        Schema::create('star_magics', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Star::class);
            $table->string('planets')->nullable();
            $table->string('gemstones')->nullable();
            $table->string('plants')->nullable();
            $table->string('metals')->nullable();
            $table->string('angel')->nullable();
            $table->string('colors')->nullable();
            $table->string('invocation')->nullable();
            $table->text('magic')->nullable();
            $table->text('reference');
            $table->foreignIdFor(User::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('star_magics');
    }
};
