<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoProduto extends Model
{
    protected $table = 'tipo_produto';
    protected $primaryKey = 'id_tipo_produto';
    protected $guarded = ['id_tipo_produto'];
    static $rules = [
        'ds_tipo_produto' => 'required|min:5|max:255',

    ];


    public function categoria() {
        return $this->hasMany('App\Models\Categoria', 'id_categoria','id_tipo_produto');
    }
}
