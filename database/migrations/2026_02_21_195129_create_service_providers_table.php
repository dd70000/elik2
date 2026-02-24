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
        Schema::create('service_providers', function (Blueprint $table) {

            $table->id();

            $table->foreignId('user_id')
                  ->constrained()
                  ->cascadeOnDelete();

            $table->string('national_id')->nullable();

            $table->text('bio')->nullable();

            $table->integer('experience_years')->nullable();

            $table->boolean('is_verified')->default(false);

            $table->decimal('average_rating', 3, 2)->default(0);

            $table->timestamps(); // مرة واحدة فقط

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_providers');
    }
};