<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Spending extends Model
{
    protected $table = 'spendings'; // Nombre de la tabla
    //protected $fillable = ['date','amount', 'category']; // Campos que se pueden insertar
    protected $fillable = ['date', 'category_id','amount'];

    public function category():BelongsTo {
        return $this->belongsTo(Category::class);
    }

}
