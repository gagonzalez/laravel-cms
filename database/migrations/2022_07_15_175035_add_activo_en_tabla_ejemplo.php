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
        Schema::table('ejemplo', function (Blueprint $table) {
            //Creamos campo activo
            $table->tinyInteger('activo')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ejemplo', function (Blueprint $table) {
            //
            $table->dropColumn('activo');
        });
    }
};
