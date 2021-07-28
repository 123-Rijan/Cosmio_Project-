<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Employees extends Model
{



    protected $table = 'Employees';

    public $primaryKey = 'ID';

    public $timestamps = false;

    public function Companies()
    {
        return $this->belongsTo('App\Companies');
    }
}
