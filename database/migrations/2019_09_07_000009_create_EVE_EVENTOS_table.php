<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEveEventosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'EVE_EVENTOS';

    /**
     * Run the migrations.
     * @table EVE_EVENTOS
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('EVE_COD');
            $table->string('EVE_ESTADO', 45);
            $table->string('EVE_NOMBRE');
            $table->dateTime('EVE_INICIO');
            $table->dateTime('EVE_FIN');
            $table->decimal('EVE_LATITUD');
            $table->decimal('EVE_LONGITUD');
            $table->text('EVE_DESCRIPCION');
            $table->string('EVE_UBICACION');
            $table->integer('EVE_COM_COD');
            $table->string('EVE_ESTADO', 45);
            $table->unsignedInteger('EVE_id');
            $table->text('EVE_URL_FOTO');
            $table->text('EVE_URL_VIDEO');

            $table->index(["EVE_COM_COD"], 'fk_EVE_EVENTOS_COM_COMUNA_idx');

            $table->index(["EVE_id"], 'fk_EVE_EVENTOS_USU_USUARIO1_idx');


            $table->foreign('EVE_COM_COD', 'fk_EVE_EVENTOS_COM_COMUNA_idx')
                ->references('COM_COD')->on('COM_COMUNA')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('EVE_id', 'fk_EVE_EVENTOS_USU_USUARIO1_idx')
                ->references('id')->on('USU_USUARIO')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
