<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // create_utilisateurs_table
public function up()
{
    Schema::create('utilisateurs', function (Blueprint $table) {
        $table->id();
        $table->string('nom');
        $table->string('mot_de_passe');
        $table->foreignId('role_id')->constrained('roles');
        $table->integer('points')->default(0);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utilisateurs');
    }
};
