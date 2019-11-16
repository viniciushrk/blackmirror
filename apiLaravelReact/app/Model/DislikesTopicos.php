<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DislikesTopicos extends Model
{
    protected $table = 'dislikes_topicos';
    protected $fillable =['id_topicos','id_users'];
}
