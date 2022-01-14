<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceptenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recepten', function (Blueprint $table) {
            $table->id();
            $table->string('naam');
            $table->text('beschrijving');
            $table->text('voorbereiding');
            $table->mediumText('recept');
            $table->string('duurtijd');
            $table->string('moeilijkheid');
            $table->foreignId('user_id')->constrained('users');
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
        Schema::dropIfExists('recepten');
    }
}
