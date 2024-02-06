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
        Schema::create('infostags', function (Blueprint $table) {
            $table->id();
            $table->String('matri')->unique();
            $table->String('nom');
            $table->String('grade');
            $table->String('matricule');
            $table->String('sexe');
            $table->String('date_nais');
            $table->String('lieu_nais');
            $table->String('ethnie');
            $table->String('reg_ori');
            $table->String('dep');
            $table->String('arron');
            $table->String('mat_sold');
            $table->String('num_cni');
            $table->String('date_deliv');
            $table->String('date_eng');
            $table->String('relig');
            $table->String('tel');
            $table->String('dip_elev');
            $table->String('nom_pere');
            $table->String('nom_mere');
            $table->String('unite');
            $table->String('emp_tenu');
            $table->String('qual_alea');
            $table->String('form_spe');
            $table->String('stat_civ');
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
        Schema::dropIfExists('infostag');
    }
};
