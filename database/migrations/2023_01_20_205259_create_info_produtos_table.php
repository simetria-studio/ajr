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
        Schema::create('info_produtos', function (Blueprint $table) {
            $table->id();
            $table->integer('produto_id')->nullable();
            $table->integer('estado_id')->nullable();
            $table->integer('segmento_id')->nullable();
            $table->string('aliquota')->nullable();
            $table->string('mva')->nullable();
            $table->string('fcp')->nullable();
            $table->string('ajuste1')->nullable();
            $table->string('ajuste2')->nullable();
            $table->string('ajuste3')->nullable();
            $table->string('pauta')->nullable();
            $table->string('protocolo')->nullable();
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
        Schema::dropIfExists('info_produtos');
    }
};
