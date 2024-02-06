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
        Schema::create('personnels', function (Blueprint $table) {
            $table->id();
            $table->string('num_cni');
            $table->string('matri')->unique();
            $table->string('nom');
            $table->string('grade');
            $table->string('sexe');
            $table->date('date_nais');
            $table->string('lieu_nais');
            $table->string('ethnie');
            $table->string('reg_ori');
            $table->string('dep');
            $table->string('arron');
            $table->string('mat_solde');
            $table->string('date_eng');
            $table->string('relig');
            $table->string('tel');
            $table->string('nom_pere');
            $table->string('nom_mere');
            $table->string('dip_elev');
            $table->string('unite');
            $table->string('stat_civ');
            $table->string('descrip');
            $table->string('img');
            $table->String('nom_per_acc');
            $table->String('tel_per_acc');
            $table->String('lien_par_per_acc');
            $table->String('adress_per_acc');
            $table->String('ville_per_acc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personnels');
    }
};
