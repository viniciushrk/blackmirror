<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Notificacoes extends Model
{
    protected $table = 'notificacoes';
    protected $fillable = ['tipo', 'conteudo'];
}
