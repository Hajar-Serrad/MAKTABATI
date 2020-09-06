<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBorrowingsTable extends Migration
{
    
    public function up()
    {
        Schema::create('borrowings', function (Blueprint $table) {
            $table->integer('copy_nbr');
            $table->foreign('copy_nbr')->references('copy_nbr')->on('copies')->onUpdate('cascade')->onDelete('cascade');
            $table->string('ISBN');
            $table->foreign('ISBN')->references('ISBN')->on('copies')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamp('borrowed_at');
            $table->timestamp('must_be_returned_at')->nullable();
            $table->primary(['ISBN','copy_nbr','user_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('borrowings');
    }
}
