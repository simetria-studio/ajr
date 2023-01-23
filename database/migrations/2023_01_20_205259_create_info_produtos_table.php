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
            $table->string('aliquota');
            $table->string('mva');
            $table->string('fcp');
            $table->string('ajuste1');
            $table->string('ajuste2');
            $table->string('ajuste3');
            $table->string('pauta');
            $table->string('protocolo');
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
