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
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('test_type_id');
            $table->string('type');
            $table->string('category');
            $table->integer('number');
            $table->text('introduction');
            $table->json('conditions')->nullable();
            $table->text('question')->nullable();
            $table->json('answers');
            $table->string('correct');
            $table->json('extra')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tests');
    }
};
