<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToChallengesTable extends Migration
{
    public function up()
    {
        Schema::table('challenges', function (Blueprint $table) {
            if (!Schema::hasColumn('challenges', 'status')) {
                $table->string('status')->default('Active')->after('number_of_questions');
            }
        });
    }

    public function down()
    {
        Schema::table('challenges', function (Blueprint $table) {
            if (Schema::hasColumn('challenges', 'status')) {
                $table->dropColumn('status');
            }
        });
    }
}
