<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class NotasUsers extends Model
{
    protected $table ='notas_users';
    protected $fillable = ['id_notas',' id_users'];
}
