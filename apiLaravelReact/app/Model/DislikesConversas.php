<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DislikesConversas extends Model
{
    protected $table = 'dislikes_conversas';
    protected $fillable =['id_conversas','id_users'];

}
