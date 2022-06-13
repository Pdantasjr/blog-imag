<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnostic extends Model
{
    use HasFactory;

    public function exams() {
        return $this->belongsTo(Exams::class, 'diagnostics_id', 'id');
    }

    public function method() {
        return $this->hasMany(Exams::class, 'diagnostics_id', 'id');
    }
}
