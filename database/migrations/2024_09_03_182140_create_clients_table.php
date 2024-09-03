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
        Schema::create('clients', function (Blueprint $table) {
            $table -> id();
            $table -> string('nome') -> nullable();
            $table -> string('cpf') -> nullable();
            $table -> string('rg') -> nullable();
            $table -> enum('sexo', ['M','F']) -> nullable();
            $table -> date('data_nascimento') -> nullable();
            $table -> string('celular');
            $table -> string('email') -> nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
