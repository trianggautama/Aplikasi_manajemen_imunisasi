<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vaksin extends Model
{
    protected $table = 'vaksin';

    protected $primaryKey = 'vaksin_id';

    protected $guarded = ['vaksin_id'];

    public $timestamps = false;
}
