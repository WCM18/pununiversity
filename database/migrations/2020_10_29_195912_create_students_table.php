<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');              
            $table->String('firstName');
            $table->String('secondName');
            $table->integer('age');
            $table->unsignedBigInteger('courses_id');
           
            $table->timestamps();
            $table->index('courses_id');
            $table->foreign('courses_id')->references('id')->on('courses')->onDelete('cascade')->change();
            
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
