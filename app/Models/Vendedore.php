<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vendedore
 *
 * @property $id
 * @property $ven_Nombre
 * @property $ven_Apellido
 * @property $ven_Telefono
 * @property $ven_FechaNacimiento
 *
 * @property Pedido[] $pedidos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Vendedore extends Model
{
    
    static $rules = [
		'ven_Nombre' => 'required',
		'ven_Apellido' => 'required',
		'ven_FechaNacimiento' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ven_Nombre','ven_Apellido','ven_Telefono','ven_FechaNacimiento'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pedidos()
    {
        return $this->hasMany('App\Models\Pedido', 'vendedor_ID', 'id');
    }
    

}
