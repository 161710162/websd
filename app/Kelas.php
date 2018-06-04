<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table='kelas';
    protected $fillable=['nama_kelas','guru_id'];
    public $timestamps=true;

        public function Guru()
	{
		return $this->belongsto('App\Guru','guru_id');
	}
}
