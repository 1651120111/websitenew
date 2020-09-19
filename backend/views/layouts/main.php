<?php

use yii\helpers\Html;
use frontend\assets\AppAsset;

$bundle = AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html class="no-js" lang="<?php echo Yii::$app->language ?>">

    <![endif]-->
    <head>
        <meta charset="<?php echo Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width,initial-scale=1, user-scalable=no"/>
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <link rel="icon" type="image/png" href="<?= \yii\helpers\Url::to('@web/images/favicon.png'); ?>"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title><?php echo Html::encode($this->title) ?></title>
        <link rel="canonical" href="<?= \Yii::$app->request->absoluteUrl; ?>"/>
        <?= Html::csrfMetaTags(); ?>
        <?php $this->head() ?>

    </head>
    <body >
    <?php
    if (Yii::$app->user->isGuest) {
        echo "LOGIN";
    }else{
    ?>
            <?php echo Html::a('lOGIN ',[\yii\helpers\Url::to('/site/login')]);
                echo \yii\helpers\Html::a(' LOGOUT', [\yii\helpers\Url::to('/site/logout')],['data' => ['method' => 'post']]);
                ?>
        <?= isset(Yii::$app->user->identity) ? Yii::$app->user->identity->username : "Khong"?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Menu</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= \yii\helpers\Url::home()?>">Home <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= \yii\helpers\Url::toRoute('/category')?>">Loai sach</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= \yii\helpers\Url::toRoute('/book')?>">Sach</a>
                </li>
            </ul>
        </div>
    </nav>
        <?php } ?>
    <?php $this->beginBody() ?>
    <?= $content ?>

    <?php $this->endBody() ?>

    </body>
    </html>
<?php $this->endPage() ?>