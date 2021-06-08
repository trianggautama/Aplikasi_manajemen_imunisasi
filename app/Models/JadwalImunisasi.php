<?php

namespace App\Models;

use App\Models\Bidan;
use App\Models\Kms;
use App\Models\Vaksin;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function kms(): HasMany
    {
        return $this->hasMany(Kms::class, 'kms_id', 'kms_id');
    }
}
