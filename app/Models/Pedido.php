<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pedido
 *
 * @property $id
 * @property $ped_FechaPedido
 * @property $ped_SubTotal
 * @property $ped_Total
 * @property $updated_at
 * @property $created_at
 * @property $cliente_ID
 * @property $producto_ID
 *
 * @property Cliente $cliente
 * @property Producto $producto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pedido extends Model
{
    
    static $rules = [
		'ped_FechaPedido' => 'required',
		'ped_SubTotal' => 'required',
		'ped_Total' => 'required',
		'cliente_ID' => 'required',
		'producto_ID' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ped_FechaPedido','ped_SubTotal','ped_Total','cliente_ID','producto_ID'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id', 'cliente_ID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function producto()
    {
        return $this->hasOne('App\Models\Producto', 'id', 'producto_ID');
    }
    

}
