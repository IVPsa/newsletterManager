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

            $table->string('NOT_ESTADO', 45);

            $table->text('NOT_URL_FOTO');
            $table->text('NOT_URL_VIDEO');


            $table->integer('NOT_TN_COD')->unsigned();

            $table->integer('NOT_COM_COD')->unsigned();

            $table->unsignedBigInteger('NOT_USUARIO_id')->unsigned();


            $table->foreign('NOT_USUARIO_id')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('NOT_COM_COD')
                ->references('COM_COD')->on('COM_COMUNA')
                ->onDelete('no action')
                ->onUpdate('no action');


            $table->foreign('NOT_TN_COD')
                ->references('TN_COD')->on('TN_TIPO_NOTICIA')
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
