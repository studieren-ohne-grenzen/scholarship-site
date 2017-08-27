<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('first_name');
            $table->string('family_name');
            $table->string('nationality');
            $table->enum('gender', ['male', 'female', 'other']);
            $table->string('current_address');
            $table->string('civil_status');
            $table->date('date_of_birth');
            $table->string('place_of_birth');
            $table->string('phone');
            $table->string('email');
            $table->string('mother');
            $table->string('father');
            $table->string('spouse')->nullable();
            $table->string('children')->nullable();
            $table->string('siblings')->nullable();
            $table->string('conditions');
            $table->string('parents_profession');
            $table->string('where_live');
            $table->string('how_many_people');
            $table->string('job');
            $table->string('conflict');
            $table->boolean('support_needed');
            $table->string('additional_information');
            $table->boolean('enrolled');
            $table->string('major')->nullable();
            $table->boolean('still_studying')->nullable();
            $table->string('dropping_out_reasons')->nullable();
            $table->string('wanted_major');
            $table->string('languages');
            $table->boolean('live_with_family');
            $table->string('engagement');
            $table->string('biggest_problems');
            $table->string('future');
            $table->string('motivation');
            $table->string('project');
            $table->string('project_goal');
            $table->string('project_reach');
            $table->string('project_role');
            $table->string('project_finances');
            $table->string('project_partners');
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
