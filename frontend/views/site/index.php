<?php
use yii\helpers\Url;
use yii\web\YiiAsset;

YiiAsset::register($this);
$this->registerCssFile('@web/css/cuss.css');
/** @var yii\web\View $this */

$this->title = 'EntretenteAki';
?>
<div class="site-index">
    <div class="p-5 mb-4 bg-transparent rounded-3">
        <div class="container-fluid py-5 text-center">
            <h1 class="display-4">Bienvenidos!</h1>
            <p class="fs-5 fw-light">Esta es al aplicacion #1 para compra de suscripciones a plataformas de entretenimiento</p>
            
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="<?= Url::to('@web/images/netflix.png') ?>" class="d-block w-100" alt="Imagen 1">
    </div>
    <div class="carousel-item">
        <img src="<?= Url::to('@web/images/aws.png') ?>" class="d-block w-100" alt="Imagen 2">
    </div>
    <div class="carousel-item">
        <img src="<?= Url::to('@web/images/dis.png') ?>" class="d-block w-100" alt="Imagen 3">
    </div>
</div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
            <h2>Regístrate</h2>
<p>Únete ahora y accede a las mejores cuentas de entretenimiento a precios increíbles. Disfruta de tus series, películas, música y más sin complicaciones. Nuestro servicio te ofrece la mejor calidad y seguridad para que tengas una experiencia sin igual. ¡No esperes más y regístrate hoy mismo!</p>

                <p><a class="btn btn-outline-secondary" href="https://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            
            <div class="col-lg-4">
                <h2>Inicia sesion</h2>

                <p>Accede a tu cuenta y comienza a disfrutar de una amplia variedad de servicios de entretenimiento. Con nuestras cuentas premium, tendrás acceso ilimitado a tus series, películas y música favoritas. Inicia sesión ahora y aprovecha todo lo que tenemos para ofrecerte.</p>

<p><a class="btn btn-outline-secondary" href="#">Iniciar sesión &raquo;</a></p>

            </div>
            <div class="col-lg-4">
            <h2>Referenciados</h2>
<p>Recomienda nuestras cuentas de entretenimiento y obtén beneficios exclusivos. Al referir a tus amigos, ambos podrán disfrutar de descuentos especiales y promociones. Comparte el entretenimiento y aprovecha al máximo todas nuestras ofertas.</p>
<p><a class="btn btn-outline-secondary" href="#">Referir amigos &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
