<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    protected $table = 'Companies';

    public $primaryKey = 'id';

    public $timestamps = true;
}
