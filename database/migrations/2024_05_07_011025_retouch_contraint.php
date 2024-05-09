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
        //
        Schema::table('universities', function (Blueprint $table) {
            $table->string('acronyme')->nullable()->change();
            $table->string('name')->nullable()->change();
            $table->date('dateCreation')->nullable()->change();
            $table->string('location')->nullable()->change();
            $table->string('address')->nullable()->change();
            $table->string('country')->nullable()->change();
            $table->string('city')->nullable()->change();
            $table->string('webSite')->nullable()->change();
            $table->string('email')->nullable()->change();
            $table->integer('contact')->nullable()->change();
            $table->integer('contact2')->nullable()->change();
            $table->integer('nbStudents')->nullable()->change();
            $table->integer('percentageInegration')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('universities', function (Blueprint $table) {
            $table->string('acronyme')->nullable(false);
            $table->string('name')->nullable(false);
            $table->date('dateCreation')->nullable(false);
            $table->string('location')->nullable(false);
            $table->string('address')->nullable(false);
            $table->string('country')->nullable(false);
            $table->string('city')->nullable(false);
            $table->string('webSite')->nullable(false);
            $table->string('email')->nullable(false);
            $table->integer('contact')->nullable(false);
            $table->integer('contact2')->nullable(false);
            $table->integer('nbStudents')->nullable(false);
            $table->integer('percentageInegration')->nullable(false);
        });
    }
};
