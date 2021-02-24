<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            //$table->integer('employee_skill_id');
            $table->string('first_name')->nullable();
            $table->string('last_name');
            $table->unsignedSmallInteger('age')->nullable();
            $table->text('about')->nullable();
            $table->char('employee_status')->nullable(); // What are the status? looking for job - unemployed - employed - freelancer?
            $table->timestamps();

            //Relations

            $table->foreign('user_id')
                ->on('user')
                ->references('id')
                ->onUpdate('cascade')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
