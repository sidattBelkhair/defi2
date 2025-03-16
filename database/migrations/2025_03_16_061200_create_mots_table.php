<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   // create_mots_table
public function up()
{
    Schema::create('mots', function (Blueprint $table) {
        $table->id();
        $table->string('mot');
        $table->foreignId('utilisateur_id')->constrained('utilisateurs');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mots');
    }
};
