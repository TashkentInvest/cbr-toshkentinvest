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

            // Category (assuming categories table exists)
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

            // Basic info from your table
            $table->string('unique_number')->nullable();
            $table->string('district');
            $table->string('street')->nullable();
            $table->string('mahalla_name')->nullable();
            $table->decimal('land', 10, 2)->nullable(); // Territory, га
            $table->date('investor_initiative_date')->nullable();
            $table->string('company_name')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('hokim_resolution_no')->nullable();

            $table->string('image')->nullable();
            $table->integer('implementation_period')->nullable(); // e.g., 36 (months)

            // Status fields
            $table->enum('status', ['step_1', 'step_2', 'archived', 'completed'])->default('step_1');

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
