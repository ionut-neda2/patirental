<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;
    protected $fillable = ['cantidad', 'descripcion', 'fecha_pago'];

    public function alquiler(){
        return $this->belongsTo(Alquiler::class, 'id_cliente_alquiler');
    }
}
