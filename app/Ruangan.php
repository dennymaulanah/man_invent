<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    public $timestamps = false;
    protected $table = 'ruangan';
    protected $fillable = ['nama', 'kategori', 'jumlah'];
}