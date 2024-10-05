<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Carbon\Carbon;

class Cliente extends Model
{
    use HasFactory;

    protected $primaryKey = 'cod_cliente';

    protected $table = 'clientes';

    protected $fillable = [
        'primer_nombre',
        'segundo_nombre',
        'primer_apellido',
        'segundo_apellido',
        'dui',
        'fecha_de_nacimiento',
        'celular',
        'correo',
        'cod_pais',
        'cod_departamento',
        'cod_municipio'
    ];

    // Relación muchos a uno con cliente y país
    public function pais(): BelongsTo
    {
        return $this->belongsTo(Pais::class, 'cod_pais', 'cod_pais');
    }

    // Relación uno a muchos entre departamento y cliente
    public function departamento(): BelongsTo
    {
        return $this->belongsTo(Departamento::class, 'cod_departamento', 'cod_departamento');
    }

    // Relación uno a muchos entre municipio y cliente
    public function municipio(): BelongsTo
    {
        return $this->belongsTo(Municipio::class, 'cod_municipio', 'cod_municipio');
    }

    // El método retorna la fecha formateada como una cadena de texto en el formato d-m-Y
    public function getFechaNacimientoFormattedAttribute()
    {
        return Carbon::parse($this->fecha_nacimiento)->format('d-m-Y');
    }
}
