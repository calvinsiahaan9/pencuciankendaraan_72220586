<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    protected $table = 'pencucian_kendaraan586';

    protected $fillable =[
                            'title',
                            'genre',
                            'year',
                            'poster'
    ];

}
