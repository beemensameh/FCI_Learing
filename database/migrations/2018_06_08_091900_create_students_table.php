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
            $table->increments('id');
            $table->integer('seat_number')->unique()->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile',11)->nullable();
            $table->string('SSN',14)->nullable();
            $table->enum('year',['1','2','3','4'])->nullable();
            $table->double('GPA')->nullable();
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
        Schema::dropIfExists('students');
    }
}
