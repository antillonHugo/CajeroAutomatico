<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Departamento extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $primaryKey = 'cod_departamento';

    protected $table = 'departamentos';

    protected $fillable = ['departamento'];

    // Relación uno a muchos con departamento y cliente
    public function clientes(): HasMany
    {
        return $this->hasMany(Cliente::class, 'cod_cliente', 'cod_departamento');
    }
}
