<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    // Kasih tau kolom mana yang boleh di isi
    protected $fillable = [
        'nama_prodi',
        'singkatan',
        'kaprodi',
        'fakultas_id',
    ];

    //Relasi dengan fakultas
    public function fakultas()
    {
        return $this->belongsTo(Fakultas::class);
    }
}
