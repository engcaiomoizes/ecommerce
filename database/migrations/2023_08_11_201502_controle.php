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
        Schema::create('controle', function(Blueprint $table) {
            $table->id();
            $table->string('login', 25)->unique();
            $table->string('senha');
            $table->string('nome', 60);
            $table->string('foto', 60)->nullable();
            $table->string('email', 60);
            $table->string('cpf', 14)->nullable();
            $table->string('telefone', 15)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('controle');
    }
};
