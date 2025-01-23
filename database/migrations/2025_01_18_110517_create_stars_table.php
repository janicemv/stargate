<?php

use App\Models\Constellation;
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
        Schema::create('stars', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('designation');
            $table->integer('HIP')->nullable();
            $table->text('BayerId');
            $table->foreignIdFor(Constellation::class)->constrained()->cascadeOnDelete();
            $table->text('origin');
            $table->text('group');
            $table->text('reference');
            $table->text('additional_info');
            $table->text('date_of_adoption');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stars');
    }
};
