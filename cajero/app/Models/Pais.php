<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $primaryKey = 'cod_pais';

    protected $table = 'paises';

    protected $fillable = ['pais'];
}
