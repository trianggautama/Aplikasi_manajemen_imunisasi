<?php

namespace App\Models;

use App\Models\Vaksin;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JadwalImunisasi extends Model
{
    protected $guarded = ['id'];

    /**
     * Get the vaksin that owns the JadwalImunisasi
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function vaksin(): BelongsTo
    {
        return $this->belongsTo(Vaksin::class, 'vaksin_id', 'vaksin_id');
    }

    public function bidan(): BelongsTo
    {
        return $this->belongsTo(Bidan::class, 'bidan_id', 'bidan_id');
    }
}
