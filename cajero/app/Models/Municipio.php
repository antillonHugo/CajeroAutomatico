<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $primaryKey = 'cod_municipio';

    protected $table = 'municipios';

    protected $fillable = ['municipio'];
}
