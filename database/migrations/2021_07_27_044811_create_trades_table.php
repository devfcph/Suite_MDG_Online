<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trades', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('fechaTrade');
            $table->string('horaTrade');
            $table->decimal('inversion', 18,2);
            $table->decimal('porcentajePago', 18, 2);
            $table->string('observaciones', 500);
            $table->integer('idAfterTrade');
            $table->integer('idAOPosicion');
            $table->integer('idBandasBollinger');
            $table->integer('idCruceEstocastico');
            $table->integer('idDivisa');
            $table->integer('idEmociones');
            $table->integer('idEstocastico');
            $table->integer('idPatronVela');
            $table->integer('idPeriodoVela');
            $table->integer('idSesion');
            $table->integer('idSoportesResistencias');
            $table->integer('idTendencia');
            $table->integer('idTiempoOperacion');
            $table->integer('idTipoOperacion');
            $table->integer('idTipoProfit');
            $table->integer('idVolatilidad');
            $table->integer('idUsers');
            
                        
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trades');
    }
}
