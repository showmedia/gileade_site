<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory;

    public function contatos(){
        return $this->hasMany('App\Models\Contato', 'veiculos_id');
    }
}
