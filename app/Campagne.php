<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campagne extends Model
{
    protected $fillable = [
        'libelle',
        'DP_Campagne',
        'FP_Campagne',
        'Code_Pays',
        'Etat_Campagne',
        'Duree_Camp',
        'Code_Client',
        'Code_Produit',
        'Code_Marque'

    ];
    protected $primaryKey = 'code';

    public function panneauxes()
    {
        return $this->hasMany('App\Panneau');
    }

    public function client()
    {
        return $this->belongsTo('App\Client');
    }


}
