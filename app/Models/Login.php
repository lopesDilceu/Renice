<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    use HasFactory;

    protected $table = 'login';
    protected $primaryKey = 'login_id';

    protected $fillable = [
        'login_us_id', 
        'login_email', 
        'login_senha',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'login_us_id');
    }
}
