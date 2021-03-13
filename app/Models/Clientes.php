<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nome',
        'endereco',
        'email',
        'nascimento',
    ];
    protected $table = 'Vendas';

    public function vendas(){
        return $this->hasMany( Vendas::class, 'cliente_id');
    }
}
