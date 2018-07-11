<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_courses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('by_who_prof');
            $table->string('name');
            $table->string('title',24);
            $table->string('description',128)->nullable();
            $table->text('post');
            $table->integer('course_id');
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
        Schema::dropIfExists('news_courses');
    }
}
