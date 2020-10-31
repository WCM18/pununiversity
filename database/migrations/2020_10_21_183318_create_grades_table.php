<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedBigInteger('courses_id');
            ;
            $table->unsignedBigInteger('students_id');
            $table->timestamps();
                    
            $table->foreign('courses_id')->references('id')->on('courses')->onDelete('cascade')->change();
            //$table->foreign('students_id')->references('id')->on('students')->onDelete('cascade')->change();
        });
            }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grades');
    }
}
