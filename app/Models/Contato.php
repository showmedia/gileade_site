<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    use HasFactory;

    public function veiculo(){
        return $this->belongsTo('App\Models\Veiculo', 'veiculos_id');
    }
    public function cliente(){
        return $this->belongsTo('App\Models\Cliente', 'clientes_id');
    }
    public function messages(){
        return $this->hasMany('App\Models\Message', 'contatos_id');
    }
}
