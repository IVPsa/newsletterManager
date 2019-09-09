<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotNoticiaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'NOT_NOTICIA';

    /**
     * Run the migrations.
     * @table NOT_NOTICIA
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('NOT_COD');
            $table->string('NOT_TITULO', 45);
            $table->date('NOT_FECHA');
            $table->text('NOT_CUERPO');
            $table->integer('NOT_COM_COD');
            $table->string('NOT_ESTADO', 45);
            $table->unsignedBigInteger('NOT_USUARIO_id');
            $table->text('NOT_URL_FOTO');
            $table->text('NOT_URL_VIDEO');
            $table->integer('NOT_TN_COD');

            $table->index(["NOT_TN_COD"], 'fk_NOT_NOTICIA_TN_TIPO_NOTICIA1_idx');

            $table->index(["NOT_COM_COD"], 'fk_NOT_NOTICIA_COM_COMUNA1_idx');

            $table->index(["NOT_USUARIO_id"], 'fk_NOT_NOTICIA_USU_USUARIO1_idx');


            $table->foreign('NOT_COM_COD', 'fk_NOT_NOTICIA_COM_COMUNA1_idx')
                ->references('COM_COD')->on('COM_COMUNA')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('NOT_USUARIO_id', 'fk_NOT_NOTICIA_USU_USUARIO1_idx')
                ->references('id')->on('USU_USUARIO')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('NOT_TN_COD', 'fk_NOT_NOTICIA_TN_TIPO_NOTICIA1_idx')
                ->references('TN_COD')->on('TN_TIPO_NOTICIA')
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
