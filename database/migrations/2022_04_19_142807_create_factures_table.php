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
        Schema::create('factures', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("patient_id")->nullable();
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');

            $table->unsignedBigInteger("assistante_id")->nullable();
            $table->foreign('assistante_id')->references('id')->on('assistantes')->onDelete('cascade');

            $table->date('date');
            $table->float('tarif_cns');
            $table->string('nom_pat');
            $table->string('prenom_pat');
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
        Schema::dropIfExists('factures');
    }
};
