<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    public function compra()
    {
        return $this->hasMany(Compra::class, 'id');
    }
    protected $fillable =[
        'Nombre',
        'status'
    ];

    static $rules = [
        'Nombre' => 'required',
    ];
}