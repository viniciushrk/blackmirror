<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UsersTopicos extends Model
{
    protected $table = 'users_topicos';
    protected $fillable = ['id_topicos','id_users'];

}
