<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    protected $table = 'incomes'; // Nombre de la tabla
    protected $fillable = ['date','amount', 'category']; // Campos que se pueden insertar
}
