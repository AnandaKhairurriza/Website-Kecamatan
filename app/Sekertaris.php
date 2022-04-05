<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sekertaris extends Model
{
    protected $table = 'sekertaris';
    protected $fillable = ['Nama','NIP','Jabatan'];
}
