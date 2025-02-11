<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Wrestler;
use App\Models\Bout;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bout_wrestlers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('wrestler_id')->constrained();
            $table->foreignId('bout_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bout_wrestlers');
    }
};
