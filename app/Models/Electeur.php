<?php

namespace App\Models;

use App\Models\Candidat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Electeur extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nom',
        'prenom',
        'dateNaissance',
        'cni',
        'candidat_id'
    ];

    //relation one to many a candidat has many eleceur 
    
    public function candidat(){
        return $this->belongsTo(Candidat::class);
    }
}
