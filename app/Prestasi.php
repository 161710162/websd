<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    protected $table='prestasis';
    protected $fillable=['foto','nama_prestasi','deskripsi'];
    public $timestamps=true;

}
