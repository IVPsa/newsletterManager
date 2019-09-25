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

            $table->increments('RESP_COD');

            $table->integer('RESP_ALT_COD')->unsigned();
            $table->unsignedBigInteger('RESP_USUARIO_id')->unsigned();


            $table->foreign('RESP_USUARIO_id')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('RESP_ALT_COD')
                ->references('ALT_COD')->on('ALT_ALTERNATIVA')
                ->onDelete('no action')
                ->onUpdate('no action');
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
       Schema::dropIfExists($this->tableName);
     }
}
