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
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fixture_id')->nullable()->constrained()->onDelete('set null');
            $table->string('opponent');
            $table->datetime('match_date');
            $table->string('venue'); // Home, Away
            $table->string('location'); // Stadium name
            $table->string('competition')->default('Uganda Premier League');
            $table->string('match_type')->default('League');
            $table->integer('season')->default(date('Y'));
            $table->integer('matchday')->nullable();
            
            // Scores
            $table->integer('home_score');
            $table->integer('away_score');
            $table->boolean('is_home')->default(true);
            
            // Match details
            $table->json('goalscorers')->nullable(); // Player IDs and minute scored
            $table->json('assists')->nullable(); // Player IDs and minute assisted
            $table->json('yellow_cards')->nullable(); // Player IDs and minute
            $table->json('red_cards')->nullable(); // Player IDs and minute
            $table->json('substitutions')->nullable(); // In/Out player IDs and minute
            
            $table->text('match_report')->nullable();
            $table->string('man_of_match')->nullable(); // Player ID or name
            $table->integer('attendance')->nullable();
            $table->string('referee')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matches');
    }
};
