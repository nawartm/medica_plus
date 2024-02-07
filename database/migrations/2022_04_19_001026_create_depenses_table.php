<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('depenses', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("assistante_id")->nullable();
            $table->foreign('assistante_id')->references('id')->on('assistantes')->onDelete('cascade');

            $table->string('mois_dep');
            $table->string('motif_dep');
            $table->string('montant_dep');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('depenses');
    }
};
