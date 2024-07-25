<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddChallengeNameToChallengesTable extends Migration
{
    public function up()
    {
        Schema::table('challenges', function (Blueprint $table) {
            if (!Schema::hasColumn('challenges', 'challenge_name')) {
                $table->string('challenge_name')->after('id');
            }
        });
    }

    public function down()
    {
        Schema::table('challenges', function (Blueprint $table) {
            if (Schema::hasColumn('challenges', 'challenge_name')) {
                $table->dropColumn('challenge_name');
            }
        });
    }
}
