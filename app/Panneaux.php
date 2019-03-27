<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Panneaux extends Model
{
    protected $fillable = [
        'emplacement',
        'partdevoix',
        'latittude',
        'longitude',
        'image',
        'idclient',
        'idcampagne',
        'idcommune',
        'idregie',
    ];

    protected $primaryKey = 'idPanneaux';

    public function campagne()
    {
        return $this->belongsTo('App\Campagne');
    }
}
