<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ville extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['ville','region_id'];

    public function region():BelongsTo
    {
        return $this->belongsTo(Region::class);
    }
    public function formateurs()
    {
        return $this->hasMany(Formateur::class);
    }
    public function etablissements(){
        return $this->hasMany(Etablissement::class);
    }
    public function permutations(){
        return $this->hasMany(Permutation::class);
    }
}
