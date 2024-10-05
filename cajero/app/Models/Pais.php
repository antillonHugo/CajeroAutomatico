<?php

namespace App\Models;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pais extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $primaryKey = 'cod_pais';

    protected $table = 'paises';

    protected $fillable = ['pais'];

    // Relación uno a muchos entre país y cliente
    public function cliente(): HasMany
    {
        return $this->hasMany(Cliente::class, 'cod_pais');
    }
}
