<?php

use app\models\Productos;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Productos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productos-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Productos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombre',
            'descripcion:ntext',
            'precio',
            'categoria',
            //'proveedor',
            //'imagen',
            //'stock',
            //'fecha_creacion',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Productos $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{add-to-cart}',
                'buttons' => [
                    'add-to-cart' => function ($url, $model) {
                        return Html::a('Agregar al carrito', ['/productos/add', 'id' => $model->id], [
                            'class' => 'btn btn-primary',
                            'data-method' => 'post',
                        ]);
                    },
                ],
            ],
        ],
    ]); ?>


</div>
