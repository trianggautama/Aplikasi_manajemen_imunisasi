<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Anak extends Model
{
    protected $table = 'anak';

    protected $primaryKey = 'anak_id';

    protected $guarded = ['anak_id'];

    public $timestamps = false; 

    public function kms(): HasMany
    {
        return $this->hasMany(Kms::class, 'kms_id', 'kms_id');
    }
}
  