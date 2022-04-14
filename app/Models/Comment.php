<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    // Se eu tivesse uma tabela com um nome que não é o padrão, utilizar a linha abaixo
    // protected $table = 'comentarios';

    protected $fillable = [
        'body',
        'visible'
    ];

    // Sempre faz o cast automático antes de gravar
    protected $casts = [
        'visible' => 'boolean'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
