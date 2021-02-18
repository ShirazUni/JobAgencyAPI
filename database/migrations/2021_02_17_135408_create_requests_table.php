<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('employer_id');
            $table->text('request_description')
                ->default('Hey I am interested in the job you wanted. I will be happy to check my profile and send me your opinion.');
            $table->boolean('is_accepted')->default(false);
            $table->timestamps();

            // Relations

            $table->foreign('employee_id')
                ->references('id')
                ->on('employees');
            // ->onUpdate('cascade')
            // ->onDelete('restrict');

            $table->foreign('employer_id')
                ->references('id')
                ->on('employers');
            // ->onUpdate('cascade')
            // ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requests');
    }
}
