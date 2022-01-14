<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientenlijstTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredientenlijst', function (Blueprint $table) {
            $table->id();
            $table->foreignId('recept_Id')->constrained('recepten');
            $table->foreignId('ingredient_Id')->constrained('ingredienten');
            $table->decimal("aantal");
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
        Schema::dropIfExists('ingredientenlijst');
    }
}
