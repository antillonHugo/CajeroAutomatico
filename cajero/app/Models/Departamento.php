<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $primaryKey = 'cod_departamento';

    protected $table = 'departamentos';

    protected $fillable = ['departamento'];
}
