<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Psb extends Model
{
    protected $table = 'psb';

    protected $fillable = [
    	'jenjang', 'tingkat', 'step', 'status', 'keterangan', 'tahun_ajaran',
        'tanggal_pembayaran', 'bank_asal', 'rekening_asal', 'rekening_tujuan_id',
        'pemegang_rekening_asal', 'metode_pembayaran',
        'jumlah_pembayaran', 'bukti_pembayaran'
    ];

    public function scopeSD($query)
    {
        return $query->where('jenjang', 1);
    }

    public function scopeSMP($query)
    {
        return $query->where('jenjang', 2);
    }

    public function scopeSMA($query)
    {
        return $query->where('jenjang', 3);
    }

    public function calonSiswa()
    {
    	return $this->hasOne('App\CalonSiswa');
    }

    public static function jenjangList()
    {
        return [
            null    => '- Pilih Jenjang -',
            1       => 'SD',
            2       => 'SMP',
            3       => 'SMA',
        ];
    }

    public static function tingkatList()
    {
        return [
            null    => '- Pilih Tingkat -',
            1       => 'I',
            2       => 'II',
            3       => 'III',
            4       => 'IV',
            5       => 'V',
            6       => 'VI',
            7       => 'VII',
            8       => 'VIII',
            9       => 'IX',
            10       => 'X',
            11       => 'XI',
            12       => 'XII',
        ];
    }

    public static function metodePembayaranList()
    {
        return [
            null                => '- Pilih Metode Pembayaran -',
            'Tunai'             => 'Tunai',
            'Setor Tunai Bank'  => 'Setor Tunai Bank',
            'Transfer ATM'      => 'Transfer ATM',
            'Intenet Banking'   => 'Internet Banking',
            'SMS Banking'       => 'SMS Banking'
        ];
    }

    public function rekeningTujuan()
    {
        return $this->belongsTo('App\Rekening', 'rekening_tujuan_id');
    }

    // format nomor - pendaftaran : PSB-MIAS-2015/2016-{JENJANG}-{TINGKAT}-{ID}
}
