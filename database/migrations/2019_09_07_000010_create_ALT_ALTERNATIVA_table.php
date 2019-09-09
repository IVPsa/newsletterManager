<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAltAlternativaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'ALT_ALTERNATIVA';

    /**
     * Run the migrations.
     * @table ALT_ALTERNATIVA
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ALT_COD');
            $table->integer('ALT_PR_COD');
            $table->string('ALT_DESCRIPCION', 45);

            $table->index(["ALT_PR_COD"], 'fk_ALT_ALTERNATIVA_PR_PREGUNTA1_idx');


            $table->foreign('ALT_PR_COD', 'fk_ALT_ALTERNATIVA_PR_PREGUNTA1_idx')
                ->references('PR_COD')->on('PR_PREGUNTA')
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
