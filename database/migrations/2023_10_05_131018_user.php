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
        Schema::create('user', function (Blueprint $table){
            $table -> id();
            $table -> string('nombre');
            $table -> string('apellidos');
            $table -> string('sexo');
            $table -> string('correo');
            $table -> string('contraseña');
            $table ->unsignedBigInteger('state_id');
            $table ->foreign('state_id')->references ('id') -> on ('state')-> onDelete ('cascade');
            $table ->unsignedBigInteger('typeuser_id');
            $table ->foreign('typeuser_id')->references ('id') -> on ('typeuser')-> onDelete ('cascade');
            $table -> timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
    }
};
