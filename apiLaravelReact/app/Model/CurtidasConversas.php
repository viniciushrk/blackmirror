<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CurtidasConversas extends Model
{
    protected $table = 'curtidas_conversas';
    protected $fillable =['id_conversas','id_users'];
}
