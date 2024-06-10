<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';
    protected $primaryKey = 'us_id';

    protected $fillable = [
        'us_nome', 
        'us_cpf', 
        'us_data_nasc', 
        'us_email', 
        'us_senha',
    ];

    protected $hidden = [
        'us_senha',
    ];

    protected $dates = [
        'us_data_nasc',
        'created_at',
        'updated_at',
    ];

    public function telefones()
    {
        return $this->hasMany(Telefone::class, 'te_us_id');
    }

    public function enderecos()
    {
        return $this->hasMany(Endereco::class, 'en_usuario_id');
    }

    public function vendas()
    {
        return $this->hasMany(Venda::class, 've_id_usuario');
    }

    public function avaliacoes()
    {
        return $this->hasMany(Avaliacao::class, 'av_id_usuario');
    }

    public function carrinho()
    {
        return $this->hasOne(Carrinho::class, 'ca_id_usuario');
    }
}
