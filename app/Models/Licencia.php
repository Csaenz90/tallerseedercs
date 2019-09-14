<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Licencia extends Model
{
    protected $table = 'licencias';

    protected $fillable = [
        'tipo_licencia',
        'valor_licencia'
    ];


}
