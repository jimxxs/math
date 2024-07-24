<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChallengesTable extends Migration
{
    public function up()
    {Schema::create('challenges', function (Blueprint $table) {
        $table->id();
        $table->string('challenge_name'); // Ensure this column exists
        $table->date('start_date');
        $table->date('end_date');
        $table->integer('duration');
        $table->integer('number_of_questions');
        $table->string('status')->default('Active'); // Add default value if necessary
        $table->timestamps();
    });
    }

    public function down()
    {
        Schema::dropIfExists('challenges');
    }
}
class UpdateChallengesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('challenges', function (Blueprint $table) {
            $table->renameColumn('num_questions', 'number_of_questions'); // Rename the column
            $table->string('status')->default('Active')->after('number_of_questions'); // Ensure status column is added
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('challenges', function (Blueprint $table) {
            $table->renameColumn('number_of_questions', 'num_questions'); // Reverse the renaming if needed
            $table->dropColumn('status'); // Remove status column if needed
        });
    }
}
