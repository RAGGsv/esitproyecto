<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proyecto
 *
 * @property $id
 * @property $NombreProyecto
 * @property $fuenteFondos
 * @property $MontoPlanificado
 * @property $MontoPatrocinado
 * @property $MontoFondosPropios
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proyecto extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['NombreProyecto', 'fuenteFondos', 'MontoPlanificado', 'MontoPatrocinado', 'MontoFondosPropios'];



}
