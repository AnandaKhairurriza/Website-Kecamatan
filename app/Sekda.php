<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sekda extends Model
{
    protected $table = 'sekda';
    protected $fillable = ['NIP', 'Nama', 'Jabatan'];
}
