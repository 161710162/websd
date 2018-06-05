<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table='artikels';
    protected $fillable=['kategori_id','judul','konten','tanggal'];
    public $timestamps=true;

    public function Kategori()
	{
		return $this->belongsTo('App\Kategori','kategori_id');
	}
}
