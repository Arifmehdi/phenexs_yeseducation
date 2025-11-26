<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            // Personal Information
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('phone_number', 20);
            $table->string('email', 150)->unique();
            $table->date('date_of_birth');
            $table->string('gender', 20);
            $table->string('nationality', 100);
            $table->string('country_of_residence', 100);
            $table->text('current_address');

            // Educational Background
            $table->string('highest_qualification', 50);
            $table->string('institution_name', 255);
            $table->string('course_name', 255);
            $table->string('graduation_year', 4); // Assuming year as string, e.g., '2023'
            $table->boolean('english_test_taken')->default(false);

            // Course Preferences
            $table->string('preferred_study_level', 50);
            $table->string('preferred_subjects', 255);
            $table->string('preferred_intake_month', 20);
            $table->string('preferred_intake_year', 4); // Assuming year as string, e.g., '2025'
            $table->text('preferred_universities')->nullable(); // Can be multiple, stored as comma-separated or JSON
            $table->text('preferred_cities')->nullable();       // Can be multiple, stored as comma-separated or JSON

            // Documents Upload (paths to stored files)
            $table->string('academic_certificates_path')->nullable();
            $table->string('mark_sheets_path')->nullable();
            $table->string('english_test_certificate_path')->nullable();
            $table->string('cv_resume_path')->nullable();
            $table->string('personal_statement_path')->nullable();

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
        Schema::dropIfExists('applications');
    }
};