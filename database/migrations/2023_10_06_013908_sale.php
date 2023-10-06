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
        Schema::create('sale', function (Blueprint $table){
            $table -> id();
            $table -> string('fecha_venta');
            $table -> string('forma_pago');
            $table -> integer('subtotal');
            $table -> integer('iva');
            $table -> integer('total');
            $table ->unsignedBigInteger('shoes_id');
            $table ->foreign('shoes_id')->references ('id') -> on ('shoes')-> onDelete ('cascade');
            $table ->unsignedBigInteger('user_id');
            $table ->foreign('user_id')->references ('id') -> on ('user')-> onDelete ('cascade');
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
