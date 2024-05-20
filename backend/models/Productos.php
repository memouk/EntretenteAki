<?php

namespace app\models;

use Yii;
use yz\shoppingcart\CartPositionInterface;
use yz\shoppingcart\CartPositionTrait;

/**
 * This is the model class for table "Productos".
 *
 * @property int $id
 * @property string $nombre
 * @property string|null $descripcion
 * @property float $precio
 * @property string $categoria
 * @property int $proveedor
 * @property string|null $imagen
 * @property int $stock
 * @property string|null $fecha_creacion
 *
 * @property CartosCompra[] $cartosCompras
 * @property DetallesPedido[] $detallesPedidos
 * @property Pedidos[] $pedidos
 * @property Proveedores $proveedor0
 * @property Usuarios[] $usuarios
 */
class Productos extends \yii\db\ActiveRecord implements CartPositionInterface
{ 
    /**
     * {@inheritdoc}
     */

     use CartPositionTrait;

     public function getPrice()
     {
         return $this->price;
     }
 
     public function getId()
     {
         return $this->id;
     }
    public static function tableName()
    {
        return 'Productos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'precio', 'categoria', 'proveedor'], 'required'],
            [['descripcion'], 'string'],
            [['precio'], 'number'],
            [['proveedor', 'stock'], 'integer'],
            [['fecha_creacion'], 'safe'],
            [['nombre'], 'string', 'max' => 100],
            [['categoria'], 'string', 'max' => 50],
            [['imagen'], 'string', 'max' => 255],
            [['proveedor'], 'exist', 'skipOnError' => true, 'targetClass' => Proveedores::class, 'targetAttribute' => ['proveedor' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
            'precio' => 'Precio',
            'categoria' => 'Categoria',
            'proveedor' => 'Proveedor',
            'imagen' => 'Imagen',
            'stock' => 'Stock',
            'fecha_creacion' => 'Fecha Creacion',
        ];
    }

    /**
     * Gets query for [[CartosCompras]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCartosCompras()
    {
        return $this->hasMany(CartosCompra::class, ['producto_id' => 'id']);
    }

    /**
     * Gets query for [[DetallesPedidos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetallesPedidos()
    {
        return $this->hasMany(DetallesPedido::class, ['producto_id' => 'id']);
    }

    /**
     * Gets query for [[Pedidos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPedidos()
    {
        return $this->hasMany(Pedidos::class, ['id' => 'pedido_id'])->viaTable('DetallesPedido', ['producto_id' => 'id']);
    }

    /**
     * Gets query for [[Proveedor0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProveedor0()
    {
        return $this->hasOne(Proveedores::class, ['id' => 'proveedor']);
    }

    /**
     * Gets query for [[Usuarios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuarios::class, ['id' => 'usuario_id'])->viaTable('CartosCompra', ['producto_id' => 'id']);
    }
}
