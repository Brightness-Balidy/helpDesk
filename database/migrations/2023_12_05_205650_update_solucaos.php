<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('solucaos', function(Blueprint $table){
            $table->unsignedBigInteger('id_requisicao');
            $table->foreign('id_requisicao')->references('id')->on('requisicoes')->onDelete('cascade')->onUpdate('cascade');



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
