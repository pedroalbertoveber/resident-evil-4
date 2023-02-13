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
        Schema::create('guns', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('name');
            $table->string('type');
            $table->string('action');
            $table->string('ammunition');
            $table->float('fire_power');
            $table->float('fire_speed');
            $table->float('reload_speed');
            $table->float('capacity');
            $table->float('initial_price');
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
        Schema::dropIfExists('guns');
    }
};
