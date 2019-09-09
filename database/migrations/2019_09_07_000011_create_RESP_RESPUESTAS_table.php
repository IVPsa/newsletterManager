<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespRespuestasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'RESP_RESPUESTAS';

    /**
     * Run the migrations.
     * @table RESP_RESPUESTAS
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedBigInteger('RESP_id');
            $table->integer('RESP_ALT_COD');

            $table->index(["RESP_ALT_COD"], 'fk_RESP_RESPUESTAS_ALT_ALTERNATIVA1_idx');

            $table->index(["RESP_id"], 'fk_RESP_RESPUESTA_USU_USUARIO1_idx');


            $table->foreign('RESP_id')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('RESP_ALT_COD')
                ->references('ALT_COD')->on('ALT_ALTERNATIVA')
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
