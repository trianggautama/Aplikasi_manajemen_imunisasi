<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $table = 'pendaftaran';

    protected $primaryKey = 'pendaftaran_id';

    protected $guarded = ['pendaftaran_id'];

    public $timestamps = false;
}
