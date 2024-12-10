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
            $table->decimal('territory', 10, 2)->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->text('participants')->nullable();
            $table->text('contacts')->nullable();
            $table->string('bankruptcy_check')->nullable();
            $table->boolean('protocol_created')->default(false);
            $table->boolean('protocol_signed')->default(false);
            $table->text('status')->nullable();
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
