<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBorrowingHistoriesTable extends Migration
{
    public function up()
    {
        Schema::create('borrowing__histories', function (Blueprint $table) {
            $table->integer('user_id');
            $table->string('ISBN');
            $table->integer('copy_nbr');
            $table->timestamp('borrowed_at');
            $table->timestamp('must_be_returned_at')->nullable();
            $table->timestamp('returned_at')->nullable();
            $table->primary(['ISBN','copy_nbr','user_id','borrowed_at']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('borrowing__histories');
    }
}
