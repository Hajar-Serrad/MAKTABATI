<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCopiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('copies', function (Blueprint $table) {
            $table->integer('copy_nbr');
            $table->string('ISBN');
            $table->string('editor');
            $table->foreign('ISBN')->references('ISBN')->on('books')->onUpdate('cascade')->onDelete('cascade');
            $table->boolean('available')->default(true);
            $table->primary(['copy_nbr','ISBN']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('copies');
    }
}
