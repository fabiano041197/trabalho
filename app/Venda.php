<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class Venda extends Model
{
    protected $table = 'venda';
    protected $fillable = array('id', 'cliente_id', 'produto_id', 'data');
    public $timestamps = false;

    public function getAll()
    {
        return self::all();
    }

    public function getOne($id)
    {
        $venda = self::find($id);
        if (is_null($venda)) {
            return false;
        }
        return $venda;
    }
}
