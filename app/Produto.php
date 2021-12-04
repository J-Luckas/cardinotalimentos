<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //
    public function fotos()
    {
        return $this->hasMany(Foto_produto::class);
    }
}
