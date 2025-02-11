<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Spending extends Model
{
    protected $table = 'spendings'; // Nombre de la tabla
    protected $fillable = ['date','amount', 'category']; // Campos que se pueden insertar
}
