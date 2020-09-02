<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
    {
        Schema::create('etapas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
        });
        Schema::create('tipos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
        });
        Schema::create('marcas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
        });
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("usuario")->unsigned();
            $table->foreign("usuario")->references("id")->on("usuarios")
                ->onDelete("cascade")
                ->onUpdate("cascade");
            $table->bigInteger("tipo")->unsigned();
            $table->foreign("tipo")->references("id")->on("tipos")
                ->onDelete("cascade")
                ->onUpdate("cascade");
            $table->string('problema');
            $table->bigInteger("marca")->unsigned();
            $table->foreign("marca")->references("id")->on("marcas")
                ->onDelete("cascade")
                ->onUpdate("cascade");
            $table->string('modelo');
            $table->string('imei');
            $table->text('solucion');
            $table->date('fecha_ingreso');
            $table->date('fecha_entrega');
            $table->bigInteger("etapa")->unsigned();
            $table->foreign("etapa")->references("id")->on("etapas")
                ->onDelete("cascade")
                ->onUpdate("cascade");
            $table->decimal('precio');
            $table->integer('calificacion')->nullable();
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
        Schema::dropIfExists('etapas');
        Schema::dropIfExists('tipos');
         Schema::dropIfExists('marcas');
        Schema::dropIfExists('servicios');
    }
}
