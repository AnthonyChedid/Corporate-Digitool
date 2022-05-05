<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNullableToAssignedTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('assigned_tasks', function (Blueprint $table) {
            $table->integer('task_score')->nullable()->change();
            $table->integer('completionTime')->nullable()->change();
            $table->string('user_answer_text')->nullable()->change();
            $table->binary('user_answer_file')->nullable()->change();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('assigned_tasks', function (Blueprint $table) {
            //
        });
    }
}
