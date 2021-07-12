<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntegratedCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('integrated_cards', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('list_id')->index();
            $table->unsignedBigInteger('card_id')->unique()->index();
            $table->float('pos', 255)->index();
            $table->string('trello_card_id')->index();
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
        Schema::dropIfExists('integrated_cards');
    }
}
