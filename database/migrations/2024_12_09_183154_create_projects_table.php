<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('unique_number')->nullable();
            $table->string('district')->nullable();
            $table->string('mahalla')->nullable();
            $table->decimal('srok_realizatsi', 10, 2)->nullable();
            $table->decimal('land', 10, 2)->nullable();
            $table->integer('implementation_period')->nullable(); // e.g., 36 months
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->date('second_stage_start_date')->nullable();
            $table->date('second_stage_end_date')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
