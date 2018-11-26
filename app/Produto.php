<?php

namespace App;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Produto extends Model
{
    protected $table = 'produto';
    protected $fillable = array('id', 'nome', 'quantidade', 'valor');
    public $timestamps = false;

    public function getAll()
    {
        return self::all();
    }

    public function getOne($id)
    {
        $produto = self::find($id);
        if (is_null($produto)) {
            return false;
        }
        return $produto;
    }
}
