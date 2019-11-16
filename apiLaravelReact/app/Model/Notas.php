<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Notas extends Model
{
    protected $table = 'notas';
    protected $fillable =['titulo','texto', 'owner'];
}
