<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Formateur extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = ['id', 'deleted_at', 'created_at', 'updated_at'];

    public function etablissement()
    {
        return $this->belongsTo(Etablissement::class);
    }

    // Définir la relation : un formateur a un métier
    public function metier()
    {
        return $this->belongsTo(Metier::class);
    }
    public function permutations(){
        return $this->hasMany(Permutation::class);
    }
}
