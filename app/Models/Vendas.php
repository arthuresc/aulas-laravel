<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Vendas extends Model
{
    // use HasFactory;

    protected $fillable =[
     'id',
     'cliente_id',
     'funcionario_id',
     'data_de_venda',
     'valor',
    ];
    protected $table = 'Vendas';

    public function cliente() {
        return $this->belongsToMany( Clientes::class, 'cliente_id');
    }
}