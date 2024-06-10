<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $table = 'produtos';
    protected $primaryKey = 'pr_id';

    protected $fillable = [
        'pr_nome', 
        'pr_descricao', 
        'pr_preco',
    ];

    public function vendas()
    {
        return $this->hasMany(ItemVenda::class, 'iv_id_produto');
    }

    public function avaliacoes()
    {
        return $this->hasMany(Avaliacao::class, 'av_id_produto');
    }

    public function estoque()
    {
        return $this->hasOne(Estoque::class, 'es_id_produto');
    }

    public function compras()
    {
        return $this->hasMany(Compra::class, 'co_id_produto');
    }

    public function itensCarrinho()
    {
        return $this->hasMany(ItemCarrinho::class, 'ic_id_produto');
    }
}
