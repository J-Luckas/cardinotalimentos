<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto_produto extends Model
{
    protected $table = 'foto_produtos';
    protected $primaryKey = 'id';

    public function produto()
    {
        return $this->belongsTo(Produto::class, 'produto_id', $this->primaryKey);
    }
}
