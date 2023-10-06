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
        Schema::create('detailsales', function (Blueprint $table){
            $table -> id();
            $table -> integer('subotal');
            $table -> integer('precio');
            $table -> integer('cantidad');
            $table ->unsignedBigInteger('sale_id');
            $table ->foreign('sale_id')->references ('id') -> on ('sale')-> onDelete ('cascade');
            $table ->unsignedBigInteger('shoes_id');
            $table ->foreign('shoes_id')->references ('id') -> on ('shoes')-> onDelete ('cascade');
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
