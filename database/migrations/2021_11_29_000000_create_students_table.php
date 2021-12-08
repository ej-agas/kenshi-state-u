<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('email')->unique()->index();
            $table->string('password');
            $table->bigInteger('teacher_id', unsigned: true)->nullable()->index();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('students', function (Blueprint $table) {
            $table->foreign('teacher_id')
                ->references('id')
                ->on('teachers')
                ->nullOnDelete()
            ;
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
