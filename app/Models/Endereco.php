<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $table = 'enderecos';
    protected $primaryKey = 'en_id';

    protected $fillable = [
        'en_usuario_id', 
        'en_logradouro', 
        'en_cidade', 
        'en_estado', 
        'en_cep',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'en_usuario_id');
    }
}
