<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class datapengirimanpaket extends Model
{
    use HasFactory;
    protected $table='pengirimanpaket';
    protected $fillable = [
        'nomor_resi',
        'namapengirim',
        'alamatpengirim',
        'kontakpengirim',
        'namapenerima',
        'alamatpenerima',
        'kontakpenerima',
        'beratbarang',
        'lebarbarang',
        'panjangbarang',
        'jeniskiriman',
        'alamatpengirim',
        'biaya',
        'statuskiriman',
    ];
     /**
     * Get the LevelUser that owns the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function statusPaket(): BelongsTo
    {
        return $this->belongsTo(statusKirim::class, 'statuskiriman', 'id');
    }
}
