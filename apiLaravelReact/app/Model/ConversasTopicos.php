<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ConversasTopicos extends Model
{
    protected $table = 'conversas_topicos';
    protected $fillable=['resposta_a_conversa_id','id_users','conversa'];
}
