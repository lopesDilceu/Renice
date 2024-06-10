<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    use HasFactory;

    protected $table = 'telefones';
    protected $primaryKey = ['te_us_id', 'te_numero'];
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'te_us_id', 
        'te_numero',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'te_us_id');
    }
}
