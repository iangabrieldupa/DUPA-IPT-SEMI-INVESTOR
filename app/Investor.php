<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investor extends Model
{
    protected $fillable = [
        'id', 'name', 'address', 'phone', 'investment'
    ];

    public function user(){
        return $this->belongsTo('App\Investor');
    }
}
