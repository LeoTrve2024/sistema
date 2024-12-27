<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleventasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalleventas', function (Blueprint $table) {
            $table->integer('ID')->primary();
            $table->float('CANTIDAD')->notNullable();
            $table->string('UNIDAD', 8)->notNullable();
            $table->string('DESCRIPCION', 250)->notNullable();
            $table->float('PC')->notNullable();
            $table->float('PV')->notNullable();
            $table->float('PU')->notNullable();
            $table->float('PU_OR')->notNullable();
            $table->smallInteger('TIPOISC')->notNullable();
            $table->float('TASAISC')->notNullable();
            $table->float('ISCUNIT')->notNullable();
            $table->float('VVU')->notNullable();
            $table->smallInteger('TIPODSCTO')->notNullable();
            $table->float('DSCTOUNIT')->notNullable();
            $table->float('DSCTO')->notNullable();
            $table->smallInteger('TIPOCARGO')->notNullable();
            $table->float('CARGOUNIT')->notNullable();
            $table->float('CARGO')->notNullable();
            $table->float('VVitem')->notNullable();
            $table->float('ISC')->notNullable();
            $table->float('IGV')->notNullable();
            $table->smallInteger('TIPOOPERACION')->notNullable();
            $table->smallInteger('TIPOAFECTACION')->notNullable();
            $table->float('MONTO')->notNullable();
            $table->float('SUBTOTAL')->notNullable();
            $table->string('PRODUCTO', 18)->notNullable();
            $table->string('LINK', 32)->notNullable();
            $table->smallInteger('ESPRODUCTO')->notNullable();
            $table->float('MINCOMPRA')->notNullable();
            $table->float('PR')->notNullable();
            $table->string('COMPRIMIR', 1)->notNullable();
            $table->string('CODSUNAT', 10)->notNullable();
            $table->float('MULTIPLO')->notNullable();
            $table->integer('BOLSAS')->notNullable();
            $table->float('TASAICBPER')->notNullable();
            $table->float('ICBPER')->notNullable();
            $table->string('IMGBOLSAS', 6)->notNullable();
            $table->float('PESO')->notNullable();
            $table->smallInteger('FACTURABLE')->notNullable();
            $table->string('ALMACEN', 18)->notNullable();
            $table->float('PMAYOR')->notNullable();
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
        Schema::dropIfExists('detalleventas');
    }
}