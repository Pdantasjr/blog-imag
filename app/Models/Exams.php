<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exams extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "synonym",
        "what_is",
        "how_it_is_done",
        "average_duration",
        "contraindications_or_relative_restrictions",
        "service_orientation",
        "achievement_orientation_or_preparation",
        "deadline"
    ];

    public function methods()
    {
        return $this->hasMany(Diagnostic::class, 'id', 'diagnostics_id');
    }
}
