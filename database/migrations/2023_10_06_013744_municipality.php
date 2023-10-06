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
        Schema::create('municipality', function (Blueprint $table){
            $table ->id();
            $table ->string('nombre');
            $table ->unsignedBigInteger('state_id');
            $table ->foreign('state_id')->references('id')->on('state');
            $table -> timestamps();

        });


 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
