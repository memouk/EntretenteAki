<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $items array */

$this->title = 'Mi Carrito';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cart-view">
    <section class="content-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </section>

    <section class="content">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Detalles del Carrito</h3>
            </div>
            <div class="box-body">
                <?php 
                //$items = \Yii::$app->cart->getId();
                //var_dump($items);exit;
                if (!empty($items)): ?>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($items as $item): ?>
                                <tr>
                                    <td><?= Html::encode($item['name']) ?></td>
                                    <td><?= Html::encode($item['quantity']) ?></td>
                                    <td><?= Yii::$app->formatter->asCurrency($item['price']) ?></td>
                                    <td><?= Yii::$app->formatter->asCurrency($item['total']) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else: ?>
                    <p>Tu carrito está vacío.</p>
                <?php endif; ?>
            </div>
            <div class="box-footer">
                <a href="<?= \yii\helpers\Url::to(['productos/index']) ?>" class="btn btn-default">Continuar Comprando</a>
                <a href="<?= \yii\helpers\Url::to(['checkout/index']) ?>" class="btn btn-success pull-right">Proceder al Pago</a>
            </div>
        </div>
    </section>
</div>