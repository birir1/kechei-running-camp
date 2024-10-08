<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingPlansTable extends Migration
{
    public function up()
    {
        Schema::create('training_plans', function (Blueprint $table) {
            $table->id(); // This will create an auto-incrementing primary key
            $table->string('title'); // Training plan title
            $table->text('description'); // Description of the training plan
            $table->integer('duration'); // Duration field
            $table->timestamps(); // Created at and updated at fields
        });
    }

    public function down()
    {
        Schema::dropIfExists('training_plans');
    }
}