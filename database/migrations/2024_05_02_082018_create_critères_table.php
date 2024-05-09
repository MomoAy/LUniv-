<?php

use App\Models\Notation;
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
        Schema::create('critères', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique()->nullable(false);
            $table->integer('value')->default(0);
            $table->timestamps();
        });

        Schema::table('critères', function (Blueprint $table) {
            $table -> foreignIdFor(Notation::class)->constrained()->cascadeOnDelete();
        });

        Schema::table('notations', function (Blueprint $table) {
            $table -> foreignIdFor(\App\Models\User::class)->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('critères');
        Schema::table('notations', function (Blueprint $table) {
            $table->dropForeign('notations_user_id_foreign');
        });
    }
};
