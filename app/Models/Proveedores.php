<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proveedore
 *
 * @property $prov_ID
 * @property $prov_Nombre
 * @property $prov_NombreRepresentante
 * @property $prov_Direccion
 * @property $prov_Email
 * @property $prov_Telefono
 * @property $prov_Telefono2
 * @property $prov_Telefono3
 * @property $prov_RUC
 * @property $prov_Observacion
 * @property $prov_Activo
 * @property $updated_at
 * @property $created_at
 *
 * @property Producto[] $productos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proveedores extends Model
{
    
    static $rules = [
		'prov_ID' => 'required',
		'prov_Nombre' => 'required',
		'prov_NombreRepresentante' => 'required',
		'prov_RUC' => 'required',
		'prov_Activo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['prov_ID','prov_Nombre','prov_NombreRepresentante','prov_Direccion','prov_Email','prov_Telefono','prov_Telefono2','prov_Telefono3','prov_RUC','prov_Observacion','prov_Activo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productos()
    {
        return $this->hasMany('App\Models\Producto', 'proveedor_ID', 'prov_ID');
    }
    

}
