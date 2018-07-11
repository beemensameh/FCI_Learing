<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('course_id')->unique();
            $table->string('cname');
            $table->enum('credit_hour',['1','2','3']);
            $table->enum('year',['1','2','3','4']);
            $table->enum('term',['first','second']);
            $table->string('prerequisite_1')->nullable();
            $table->string('prerequisite_2')->nullable();
            $table->string('prerequisite_3')->nullable();
            $table->enum('type',['require','optional']);
            $table->enum('department',['is', 'cs', 'mm', 'it']);
            $table->text('link')->nullable();
            $table->boolean('available');
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
        Schema::dropIfExists('courses');
    }
}
