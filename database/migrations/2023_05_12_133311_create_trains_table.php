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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('azienda', 50);
            $table->string('stazione_di_partenza',30);
            $table->string('stazione_di_arrivo',30);
            $table->timestamp('orario_di_partenza');
            $table->timestamp('orario_di_arrivo');
            $table->string('codice_treno', 10);
            $table->unsignedTinyInteger('numero_carrozze')->nullable($value = true);
            $table->boolean('in_orario');
            $table->boolean('cancellato');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
