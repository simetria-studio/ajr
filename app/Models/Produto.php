<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_produto',
        'cest',
        'ncm',
        'segmento',
        'descricao',
        'aliquota',
        'mva',
        'fcp',
        'ajuste1',
        'ajuste2',
        'ajuste3',
        'pauta',
        'protocolo',
        'estados'
    ];

    protected $guarded = [];
}
