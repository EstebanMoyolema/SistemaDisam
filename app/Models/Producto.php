<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $pro_Nombre
 * @property $pro_Descripcion
 * @property $pro_Peso
 * @property $pro_PrecioCompra
 * @property $pro_FechaElaboracion
 * @property $pro_FechaExpiracion
 * @property $pro_PrecioVenta
 * @property $pro_Stock
 * @property $pro_Descontinuado
 * @property $pro_Imagen
 * @property $pro_Vendido
 * @property $updated_at
 * @property $created_at
 * @property $categoria_ID
 * @property $proveedor_ID
 *
 * @property Categoria $categoria
 * @property Pedido[] $pedidos
 * @property Proveedore $proveedore
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'pro_Nombre' => 'required',
		'pro_PrecioCompra' => 'required',
		'categoria_ID' => 'required',
		'proveedor_ID' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['pro_Nombre','pro_Descripcion','pro_Peso','pro_PrecioCompra','pro_FechaElaboracion','pro_FechaExpiracion','pro_PrecioVenta','pro_Stock','pro_Descontinuado','pro_Imagen','pro_Vendido','categoria_ID','proveedor_ID'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'categoria_ID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pedidos()
    {
        return $this->hasMany('App\Models\Pedido', 'producto_ID', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function proveedore()
    {
        return $this->hasOne('App\Models\Proveedore', 'id', 'proveedor_ID');
    }
    
}
