<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoProduto extends Model
{
    use HasFactory;

    protected $fillable = [
        'produto_id',
        'estado_id',
        'segmento_id',
        'aliquota',
        'mva',
        'fcp',
        'ajuste1',
        'ajuste2',
        'ajuste3',
        'pauta',
        'protocolo',
    ];

    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }

    public function estado()
    {
        return $this->belongsTo(State::class);
    }

    public function segmento()
    {
        return $this->belongsTo(Segmento::class);
    }
}
