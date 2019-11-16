<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CurtidasTopicos extends Model
{
    protected $table = 'curtidas_topicos';
    protected $fillable =['id_topicos','id_users'];
}
