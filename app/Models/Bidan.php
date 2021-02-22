<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bidan extends Model
{
    protected $table = 'bidan';

    protected $primaryKey = 'bidan_id';

    protected $guarded = [''];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
