<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assistante extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_sec',
        'prenom_sec',
        'email',
        'password '
    ];

    //relationship methode_heritage


    //une assistante rempli plusieurs depenses
    public function depense()
    {
        return $this->hasMany(Depense::class);
    }

    //une assistante rempli plusieurs fiches patient
    public function FichePatient()
    {
        return $this->hasMany(Fiche_Patient::class);
    }

}
