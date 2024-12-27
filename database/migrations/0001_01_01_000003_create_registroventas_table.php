<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroventasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registroventas', function (Blueprint $table) {
            $table->bigInteger('DUAL')->primary();
            $table->date('FECHAEMISION')->nullable();
            $table->date('FECHAVENCIMIENTO')->nullable();
            $table->smallInteger('TIPOCOMPROBANTE')->nullable();
            $table->string('SERIECO', 8)->nullable();
            $table->integer('NUMEROCO')->nullable();
            $table->string('TIPODOCUMENTO', 2)->nullable();
            $table->string('NRODOCUMENTO', 12)->nullable();
            $table->string('RAZONNOMBRE', 128)->nullable();
            $table->string('DIRECCION', 250)->nullable();
            $table->decimal('VEXPORTACION', 16, 6)->nullable();
            $table->decimal('IGVTASA', 12, 6)->nullable();
            $table->decimal('IGVIPM', 16, 6)->nullable();
            $table->decimal('ISC', 16, 6)->nullable();
            $table->decimal('OTROSTRIBUTOS', 16, 6)->nullable();
            $table->decimal('BASEIMPONIBLE', 16, 6)->nullable();
            $table->decimal('INAFECTAS', 16, 6)->nullable();
            $table->decimal('TOTALEXONERADA', 16, 6)->nullable();
            $table->decimal('GRATUITAS', 16, 6)->nullable();
            $table->smallInteger('TIPODSCTO')->nullable();
            $table->decimal('DSCTOUNIT', 12, 6)->nullable();
            $table->decimal('DSCTOGLOBAL', 12, 2)->nullable();
            $table->decimal('DESCUENTOS', 16, 6)->nullable();
            $table->smallInteger('TIPOCARGO')->nullable();
            $table->decimal('CARGOUNIT', 12, 6)->nullable();
            $table->decimal('CARGOGLOBAL', 12, 2)->nullable();
            $table->decimal('CARGOS', 16, 6)->nullable();
            $table->decimal('IMPORTETOTAL', 16, 6)->nullable();
            $table->string('MONEDA', 4)->default('PEN');
            $table->decimal('TIPOCAMBIO', 16, 6)->nullable();
            $table->decimal('PERCEPUNIT', 12, 6)->nullable();
            $table->decimal('PERCEPCION', 16, 6)->nullable();
            $table->smallInteger('TIPOPAGO')->nullable();
            $table->date('RCPFECHA')->nullable();
            $table->string('RCPTIPO', 2)->nullable();
            $table->string('RCPSERIE', 8)->nullable();
            $table->string('RCPNUMERO', 16)->nullable();
            $table->string('MOTIVONOTA', 64)->nullable();
            $table->string('CODIGONOTA', 3)->nullable();
            $table->smallInteger('TIPOGUIA')->default(9);
            $table->string('GUIAREMISION', 128)->nullable();
            $table->string('PLACA', 12)->nullable();
            $table->date('FECHATURNO')->nullable();
            $table->smallInteger('TURNO')->nullable();
            $table->time('HORA')->nullable();
            $table->smallInteger('PUNTOVENTA')->nullable();
            $table->smallInteger('MAQUINAVENTA')->nullable();
            $table->smallInteger('SITUACION')->nullable();
            $table->smallInteger('ENVIOSUNAT')->default(0);
            $table->date('FECHAENVIO')->nullable();
            $table->integer('IDSESION')->nullable();
            $table->string('CAJERO', 64)->nullable();
            $table->smallInteger('AFECTARSTOCK')->default(1);
            $table->smallInteger('NPFACTURADO')->default(0);
            $table->bigInteger('ENVIOCONTABILIDAD')->default(0);
            $table->string('USERID', 32)->nullable();
            $table->string('GLOSA', 128)->nullable();
            $table->smallInteger('TRANSPORTABLE')->default(0);
            $table->smallInteger('ENVIOWEB')->default(0);
            $table->smallInteger('RESOLUCION')->default(0);
            $table->string('ALMACEN', 36)->nullable();
            $table->smallInteger('ENTREGA')->default(0);
            $table->smallInteger('COMPROBANTEELECTRONICO')->default(1);
            $table->string('ESPECIALIDAD', 12)->nullable();
            $table->bigInteger('NROHISTORIA')->nullable();
            $table->string('MEDICO', 12)->nullable();
            $table->decimal('PPCONVENIO', 12, 2)->nullable();
            $table->string('CONVENIO', 64)->nullable();
            $table->string('REFERENCIA', 512)->nullable();
            $table->smallInteger('DATAVALIDADA')->default(0);
            $table->smallInteger('ESTADOPLE')->default(1);
            $table->smallInteger('RESUMENID')->nullable();
            $table->integer('NROSORTEO')->nullable();
            $table->decimal('TASAICBPER', 12, 2)->nullable();
            $table->string('CAT15_ELEM1', 4)->nullable();
            $table->string('CAT15_ELEM2', 4)->nullable();
            $table->string('CAT15_ELEM3', 4)->nullable();
            $table->string('CAT15_ELEM4', 4)->nullable();
            $table->string('CODDIRECCION', 4)->nullable();
            $table->string('CODLOCALANEXO', 4)->nullable();
            $table->decimal('PAGOEFECTIVO', 12, 2)->nullable();
            $table->string('TIPOCLIENTE', 64)->nullable();
            $table->string('ORDENVENTA', 16)->nullable();
            $table->smallInteger('ENVIOWEBSERVICE')->nullable();
            $table->string('TIPOOPERACION', 2)->default('01');
            $table->decimal('TOTALANTICIPOS', 16, 6)->nullable();
            $table->integer('IDCRM')->nullable();
            $table->smallInteger('NROCUOTAS')->nullable();
            $table->string('TELEFONO', 13)->nullable();
            $table->string('GARANTIA', 13)->nullable();
            $table->string('AUTORIZACION', 13)->nullable();
            $table->date('FECHACREACION')->nullable();
            $table->smallInteger('TURNOCREACION')->nullable();
            $table->integer('NROCANJE')->nullable();
            $table->string('NUMPAGO', 32)->nullable();
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
        Schema::dropIfExists('registroventas');
    }
}