<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrPreguntaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'PR_PREGUNTA';

    /**
     * Run the migrations.
     * @table PR_PREGUNTA
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('PR_COD');
            $table->string('PR_NUM', 45);
            $table->text('PR_DETALLE');
            $table->integer('PR_ENC_COD');

            $table->index(["PR_ENC_COD"], 'fk_PR_PREGUNTA_ENC_ENCUESTA1_idx');


            $table->foreign('PR_ENC_COD', 'fk_PR_PREGUNTA_ENC_ENCUESTA1_idx')
                ->references('ENC_COD')->on('ENC_ENCUESTA')
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
