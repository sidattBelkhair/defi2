<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   // create_commentaires_table
public function up()
{
    Schema::create('commentaires', function (Blueprint $table) {
        $table->id();
        $table->foreignId('mot_id')->constrained('mots');
        $table->foreignId('utilisateur_id')->constrained('utilisateurs');
        $table->text('commentaire');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commentaires');
    }
};
