<?php

namespace App\Models;

use App\Models\Anak;
use App\Models\JadwalImunisasi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kms extends Model
{
    protected $guarded = ['kms_id'];

    protected $table = 'kms';

    protected $primaryKey = 'kms_id';

    /**
     * Get the anak that owns the Kms
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function anak(): BelongsTo
    {
        return $this->belongsTo(Anak::class, 'anak_id', 'anak_id');
    }

    /**
     * Get the imunisasi that owns the Kms
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function jadwal_imunisasi(): BelongsTo
    {
        return $this->belongsTo(JadwalImunisasi::class, 'jadwal_imunisasi_id', 'id');
    }

}
