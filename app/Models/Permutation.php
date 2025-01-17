<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permutation extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = ['id', 'deleted_at', 'created_at', 'updated_at'];
    public function ville(){
        return $this->belongsTo(Ville::class);
    }
    public function formateur(){
        return $this->belongsTo(Formateur::class);
    }
}
