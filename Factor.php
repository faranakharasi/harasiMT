<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factor extends Model
{
    protected $fillable = [
        'type','PaymentID','BillID'
    ];
    protected function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
