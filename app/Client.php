<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'Raison_Soc'
    ];
    protected $primaryKey = 'code';

    public function Campagnes()
    {
        return $this->hasMany('App\Campagne');
    }

}
