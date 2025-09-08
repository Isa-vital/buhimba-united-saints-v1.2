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
        Schema::create('fixtures', function (Blueprint $table) {
            $table->id();
            $table->string('opponent');
            $table->datetime('match_date');
            $table->string('venue'); // Home, Away
            $table->string('location'); // Stadium name
            $table->string('competition')->default('Uganda Premier League');
            $table->string('match_type')->default('League'); // League, Cup, Friendly
            $table->integer('season')->default(date('Y'));
            $table->integer('matchday')->nullable();
            $table->text('preview')->nullable();
            $table->boolean('is_completed')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fixtures');
    }
};
