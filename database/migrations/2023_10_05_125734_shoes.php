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
        Schema::create('shoes', function (Blueprint $table){
            $table -> id();
            $table -> string('modelo');
            $table -> string('material');
            $table -> integer('costo');
            $table -> integer('cantidad');
            $table ->unsignedBigInteger('size_id');
            $table ->foreign('size_id')->references ('id') -> on ('size')-> onDelete ('cascade');
            $table ->unsignedBigInteger('colour_id');
            $table ->foreign('colour_id')->references ('id') -> on ('colour')-> onDelete ('cascade');
            $table ->unsignedBigInteger('shops_id');
            $table ->foreign('shops_id')->references ('id') -> on ('shops')-> onDelete ('cascade');
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
