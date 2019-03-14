<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePonderatorsTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ponderators_tasks', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('task_id');
            $table->foreign('task_id')
                ->references('id')
                ->on('tasks');

            $table->bigInteger('ponderator_id');
            $table->foreign('ponderator_id')
                ->references('id')
                ->on('ponderators');

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
        Schema::dropIfExists('ponderators_tasks');
    }
}
