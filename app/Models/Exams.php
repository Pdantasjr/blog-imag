<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exams extends Model
{
    use HasFactory;

    protected $fillable = [
        'diagnostics_id',
        'name',
        'slug',
        'synonym',
        'what_is',
        'how_it_is_done',
        'average_duration',
        'contraindications_or_relative_restrictions',
        'service_guidelines',
        'achievement_orientation_or_preparation',
        'deadline',
    ];

    public function method()
    {
        return $this->hasOne(DiagnosticMethod::class, 'id', 'diagnostics_id');
    }
}
