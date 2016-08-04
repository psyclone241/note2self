<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
          $table->engine = 'InnoDB';

          $table->increments('id')->first()->comment('Primary Key');
          $table->smallInteger('user_id');
          $table->string('title', 255);
          $table->text('body');
          $table->smallInteger('created_by');
          $table->smallInteger('modified_by');
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
        Schema::drop('notes');
    }
}
