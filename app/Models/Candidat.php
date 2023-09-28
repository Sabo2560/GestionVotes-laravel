<?php

namespace App\Models;

use App\Models\Electeur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Candidat extends Model
{
    use HasFactory;


    protected $fillable = [
        'id',
        'nom',
        'prenom',
        'dateNaissance',
        'parti',
        'paysNaissance'
    ];

    //relation one to many a candidat has many eleceur 
    public function electeur(){
        return $this->hasMany(Electeur::class);
    }
}
