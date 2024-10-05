<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Municipio extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $primaryKey = 'cod_municipio';

    protected $table = 'municipios';

    protected $fillable = ['municipio'];

    // Relación uno a muchos entre municipio y cliente
    public function clientes(): HasMany
    {
        return $this->hasMany(Cliente::class, 'cod_cliente', 'cod_municipio');
    }
}
