<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{
    use HasFactory;

    protected $table = 'carrinho';
    protected $primaryKey = 'ca_id';

    protected $fillable = [
        'ca_id_usuario',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'ca_id_usuario');
    }

    public function itens()
    {
        return $this->hasMany(ItemCarrinho::class, 'ic_id_carrinho');
    }
}
