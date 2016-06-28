<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    //use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
     protected $fillable =
     [
         'id_bmn',
         'nama_bmn',
         'type',
         'tahun',
         'no_urut',
         'jumlah',
         'kondisi',
         'bukti_kepemilikan',
         'penguasaan',
         'asal_perolehan',
         'total_rupiah',
         'keterangan'
     ];

    //protected $dates = ['deleted_at'];
}
