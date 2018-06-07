<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ekskul extends Model
{
    protected $table='ekskuls';
    protected $fillable=['nama_ekskul','guru_id','fasilitas_id','jadwal'];
    public $timestamps=true;

        public function Guru()
	{
		return $this->belongsTo('App\Guru','guru_id');
	}
	public function Fasilitas()
	{
		return $this->belongsTo('App\Fasilitas','fasilitas_id');
	}
}
