<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

    // Specify the table name if it's not the plural of the model name
    protected $table = 'resumes'; // Change this if your table has a different name

    // Specify which fields are mass assignable
    protected $fillable = [
        'name',
        'phone',
        'email',
        'date_of_birth',
        'place_of_birth',
        'age',
        'weight',
        'religion',
        'citizenship',
        'height',
        'civil_status',
        'tertiary_education',
        'secondary_education',
        'eligibility',
        'skills',
    ];
}
