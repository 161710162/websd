<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    protected $table='fasilitas';
    protected $fillable=['nama_fasilitas','jumlah','keterangan'];
    public $timestamps=true;

	public function Ekskul()
	{
		return $this->hasMany('App\Ekskul','fasilitas_id');
	}

}
