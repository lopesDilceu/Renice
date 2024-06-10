<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemVenda extends Model
{
    use HasFactory;

    protected $table = 'itens_venda';
    protected $primaryKey = 'iv_id';

    protected $fillable = [
        'iv_id_venda', 
        'iv_id_produto', 
        'iv_quantidade', 
        'iv_preco_unitario',
    ];

    public function venda()
    {
        return $this->belongsTo(Venda::class, 'iv_id_venda');
    }

    public function produto()
    {
        return $this->belongsTo(Produto::class, 'iv_id_produto');
    }
}
