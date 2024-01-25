<?php

namespace App\Models;
use App\Models\Autores;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;
    protected $fillable = ['titulo', 'editorial', 'precio','autor_id'];
    public function autor(){
        return $this->belongsTo(Autores::class);
        }
}
