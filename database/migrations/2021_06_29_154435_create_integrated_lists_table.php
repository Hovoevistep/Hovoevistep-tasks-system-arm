<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntegratedListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('integrated_lists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('board_id')->index();
            $table->unsignedBigInteger('list_id')->index();
            $table->string('trello_list_id')->index();
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
        Schema::dropIfExists('integrated_lists');
    }
}
