<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendukung extends Model
{
    protected $table = 'pendukung';
    protected $fillable = ['KodeProgramPer', 'IDFilePendukung', 'FilePendukung', 'KFilePendukung'];
}
