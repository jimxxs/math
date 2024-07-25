<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNumberOfQuestionsToChallengesTable extends Migration
{
    public function up()
    {
        Schema::table('challenges', function (Blueprint $table) {
            if (!Schema::hasColumn('challenges', 'number_of_questions')) {
                $table->integer('number_of_questions')->after('duration');
            }
        });
    }

    public function down()
    {
        Schema::table('challenges', function (Blueprint $table) {
            if (Schema::hasColumn('challenges', 'number_of_questions')) {
                $table->dropColumn('number_of_questions');
            }
        });
    }
}
