<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Etablissement extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = ['id', 'deleted_at', 'created_at', 'updated_at'];
    public function formateurs()
    {
        return $this->hasMany(Formateur::class);
    }
    public function ville()
    {
        return $this->belongsTo(Ville::class);
    }
}
