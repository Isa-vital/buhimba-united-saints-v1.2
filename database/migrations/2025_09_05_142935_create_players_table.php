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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('shirt_number')->unique();
            $table->string('position'); // Goalkeeper, Defender, Midfielder, Forward
            $table->date('date_of_birth')->nullable();
            $table->string('nationality')->default('Uganda');
            $table->text('biography')->nullable();
            $table->string('photo')->nullable();
            $table->decimal('height', 5, 2)->nullable(); // in meters
            $table->decimal('weight', 5, 2)->nullable(); // in kg
            $table->string('preferred_foot')->nullable(); // Left, Right, Both
            $table->json('social_media')->nullable(); // JSON for social media links
            
            // Statistics
            $table->integer('appearances')->default(0);
            $table->integer('goals')->default(0);
            $table->integer('assists')->default(0);
            $table->integer('yellow_cards')->default(0);
            $table->integer('red_cards')->default(0);
            $table->integer('minutes_played')->default(0);
            
            $table->boolean('is_active')->default(true);
            $table->date('joined_date')->nullable();
            $table->date('contract_end')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
