<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->increments('applicant_id');
            $table->integer('application_number');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('middlename');
            $table->date('date_of_birth');
            $table->string('phone_no');
            $table->string('email');
            $table->string('password');
            $table->string('department');
            $table->string('enrollment_type');
            $table->integer('jamb_no');
            $table->integer('jamb_score');
            $table->enum('gender', ['Male', 'Female']);
            $table->enum('marital_status', ['single', 'Married', 'Divorced', 'Other']);
            $table->string('state_of_origin');
            $table->string('local_government');
            $table->string('home_town');
            $table->text('home_address');
            $table->string('applicant_passport');
            $table->string('course');
            $table->string('religion');
            $table->text('address');
            $table->enum('genotype', ['AA', 'AS', 'SS']);
            $table->enum('bloodgroup', ['A', 'B', 'AB', 'O']);
            $table->string('session');
            $table->enum('admission_status', ['admitted', 'processing', 'rejected']);
            $table->string('admission_batch');
            $table->string('school_id');
            $table->enum('register_status', ['started', 'in progress', 'finished']);
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
        Schema::dropIfExists('applicants');
    }
}
