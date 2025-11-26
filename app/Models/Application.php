<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number',
        'email',
        'date_of_birth',
        'gender',
        'nationality',
        'country_of_residence',
        'current_address',
        'highest_qualification',
        'institution_name',
        'course_name',
        'graduation_year',
        'english_test_taken',
        'preferred_study_level',
        'preferred_subjects',
        'preferred_intake_month',
        'preferred_intake_year',
        'preferred_universities',
        'preferred_cities',
        'academic_certificates_path',
        'mark_sheets_path',
        'english_test_certificate_path',
        'cv_resume_path',
        'personal_statement_path',
    ];
}
