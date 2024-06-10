<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;

    protected $table = 'vendas';
    protected $primaryKey = 've_id';

    protected $fillable = [
        've_id_usuario', 
        've_status', 
        've_total',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 've_id_usuario');
    }

    public function itens()
    {
        return $this->hasMany(ItemVenda::class, 'iv_id_venda');
    }
}
