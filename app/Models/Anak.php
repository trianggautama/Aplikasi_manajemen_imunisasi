<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
    protected $table = 'anak';

    protected $primaryKey = 'anak_id';

    protected $guarded = ['anak_id'];

    public $timestamps = false;
}
