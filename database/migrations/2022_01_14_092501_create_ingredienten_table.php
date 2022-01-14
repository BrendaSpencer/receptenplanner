<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredienten', function (Blueprint $table) {
            $table->id();
            $table->string('naam')->unique();
            $table->boolean('winkellijst');
            $table->foreignId('winkelcategorie_Id')->constrained('winkel_categories');
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
        Schema::dropIfExists('ingredienten');
    }
}
