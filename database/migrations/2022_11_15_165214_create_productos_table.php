<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('producto');
            $table->decimal('precio');
            $table->decimal('cantidad');
            $table->string('imagen');
            $table->unsignedBigInteger('id_categoria');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_categoria')->references('id')->on('categorias');
            $table->foreign('id_user')->references('id')->on('users');
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
        Schema::dropIfExists('productos');
    }
};
