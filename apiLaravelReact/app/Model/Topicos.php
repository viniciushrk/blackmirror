<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Topicos extends Model
{
    protected $table ='topicos';
    protected $fillable = ['titulo','texto','publico'];
}
