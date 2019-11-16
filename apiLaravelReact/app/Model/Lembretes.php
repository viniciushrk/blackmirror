<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Lembretes extends Model
{
    protected $table = 'lembretes';
    protected $fillable = ['id_notas','datahora'];
}
