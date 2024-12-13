<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Disciplina extends Model
{
    use HasFactory;
    protected $fillable = [
    'nome',
    'curso_id',
    ];
    public function curso()
    {
    return $this->belongsTo(Curso::class);
    }
}