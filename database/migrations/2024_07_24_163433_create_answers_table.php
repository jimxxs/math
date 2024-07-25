<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('question_id');
            $table->unsignedBigInteger('challenge_id');
            $table->text('answer');
            $table->timestamps();

            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
            $table->foreign('challenge_id')->references('id')->on('challenges')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('answers');
    }
}
