<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categoria';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function nota(){

        $array = [];

        foreach( DB::select(
        'select nota.* from nota
        inner join categoria on categoria.id = nota.id_categoria
        where categoria.id = ?',
        [$this->id]) as $sql){
            array_push($array, $sql);
        }

        return $array;
    }
}
