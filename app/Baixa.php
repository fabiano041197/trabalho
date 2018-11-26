<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Baixa extends Model
{
    protected $table = 'baixa';
    protected $fillable = array('id', 'cliente_id', 'produto_id', 'data');
    public $timestamps = false;

    public function getAll()
    {
        return self::all();
    }

    public function getOne($id)
    {
        $baixa = self::find($id);
        if (is_null($baixa)) {
            return false;
        }
        return $baixa;
    }
}
