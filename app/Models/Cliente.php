<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $cli_TipoDocumento
 * @property $cli_NoDocumento
 * @property $cli_Nombre
 * @property $cli_Apellido
 * @property $cli_Telefono
 * @property $cli_Direccion
 * @property $cli_NombreComercial
 * @property $cli_Email
 * @property $updated_at
 * @property $created_at
 * @property $rutas_ID
 *
 * @property Pedido[] $pedidos
 * @property Ruta $ruta
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'cli_TipoDocumento' => 'required',
		'cli_NoDocumento' => 'required',
		'cli_Nombre' => 'required',
		'cli_NombreComercial' => 'required',
		'rutas_ID' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cli_TipoDocumento','cli_NoDocumento','cli_Nombre','cli_Apellido','cli_Telefono','cli_Direccion','cli_NombreComercial','cli_Email','rutas_ID'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pedidos()
    {
        return $this->hasMany('App\Models\Pedido', 'cliente_ID', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ruta()
    {
        return $this->hasOne('App\Models\Ruta', 'id', 'rutas_ID');
    }
    

}
