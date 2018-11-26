<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'cliente';
    protected $fillable = array('id', 'nome', 'endereco');
    public $timestamps = false;

    public function getAll()
    {
        return self::all();
    }

    public function getOne($id)
    {
        $cliente = self::find($id);
        if (is_null($cliente)) {
            return false;
        }
        return $cliente;
    }
}
