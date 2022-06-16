<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DiagnosticMethod extends Model
{
    use HasFactory;

//    protected $table = "diagnostic_methods";

    protected $fillable = [
        'name',
        'slug',
        'image',
    ];

//    public function method() {
//        return $this->belongsTo(Exams::class, 'diagnostics_id', 'id');
//    }
//
//    public function exams() {
//        return $this->hasMany(Exams::class, 'diagnostics_id', 'id');
//    }
}
