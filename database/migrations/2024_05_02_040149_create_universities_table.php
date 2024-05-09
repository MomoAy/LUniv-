<?php

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
        Schema::create('universities', function (Blueprint $table) {
            $table->id();
            $table->string('acronyme')->unique()->nullable(false);
            $table->string('name')->unique()->nullable(false);
            $table->date('dateCreation')->unique()->nullable(false);
            $table->string('location')->unique()->nullable(false);
            $table->string('address')->unique()->nullable(false);
            $table->string('country')->unique()->nullable(false);
            $table->string('city')->unique()->nullable(false);
            $table->string('webSite')->unique()->nullable(false);
            $table->string('email')->unique()->nullable(false);
            $table->integer('contact')->unique()->nullable(false);
            $table->integer('contact2')->unique()->nullable(false);
            $table->integer('nbStudents')->unique()->nullable(false);
            $table->integer('percentageInegration')->unique()->nullable(false);
            $table->timestamps();
        });

        Schema::table('users', function(Blueprint $table){
            $table->string('photo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('universities');
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('photo');
        });
    }
};
