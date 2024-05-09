<?php

use App\Models\Images;
use App\Models\University;
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
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->timestamps();
        });

        Schema::table('images', function (Blueprint $table) {
            $table->foreignIdFor(University::class)->nullable(false)->constrained()->cascadeOnDelete();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
        Schema::table('images', function (Blueprint $table) {
            $table->dropForeignIdFor(Images::class);
        });
    }
};
