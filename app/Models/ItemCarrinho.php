<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemCarrinho extends Model
{
    use HasFactory;

    protected $table = 'itens_carrinho';
    protected $primaryKey = 'ic_id';

    protected $fillable = [
        'ic_id_carrinho', 
        'ic_id_produto', 
        'ic_quantidade',
    ];

    public function carrinho()
    {
        return $this->belongsTo(Carrinho::class, 'ic_id_carrinho');
    }

    public function produto()
    {
        return $this->belongsTo(Produto::class, 'ic_id_produto');
    }
}
