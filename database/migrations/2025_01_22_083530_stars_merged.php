<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Constellation;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('stars_merged', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('iau_desig');
            $table->integer('iau_HIP')->nullable();
            $table->text('hash')->nullable();
            $table->text('WDS_J')->nullable();
            $table->text('Vmag')->nullable();
            $table->float('RA_J2000')->nullable();
            $table->float('Dec_J2000')->nullable();
            $table->text('BayerId')->nullable();
            $table->foreignIdFor(Constellation::class)->constrained()->cascadeOnDelete();
            $table->text('additional_info')->nullable();
            $table->text('origin')->nullable();
            $table->text('date_of_adoption')->nullable();
            $table->text('group')->nullable();
            $table->text('reference')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stars_merged');
    }
};
