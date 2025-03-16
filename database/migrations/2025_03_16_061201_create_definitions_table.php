<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
  // create_definitions_table
public function up()
{
    Schema::create('definitions', function (Blueprint $table) {
        $table->id();
        $table->foreignId('mot_id')->constrained('mots');
        $table->text('definition');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('definitions');
    }
};
