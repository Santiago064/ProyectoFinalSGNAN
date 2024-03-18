<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    public function insumos()
    {
        return $this->hasMany(Insumo::class, 'id');
    }

    protected $fillable =[
        'Nombre_Insumo',
        'status'
    ];

    static $rules = [
        'Nombre_Insumo' => 'required',
    ];
}