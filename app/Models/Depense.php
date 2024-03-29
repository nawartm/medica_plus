<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depense extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'mois_dep',
        'motif_dep',
        'montant_dep'
    ];

    //une depense est rempli par une seule assistante
    public function assistante()
    {
        return $this->belongsTo(assistante::class);
    }

    
}
