<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use app\assets\GalleryAsset;
use yii\helpers\Url;

GalleryAsset::register($this);

$this->title = 'Galeria';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-gallery">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        To jest galeria
    </p>

    <div class="parent-container">
        <a class="image-link" href='<?= Url::to("@web/images/gallery/001.jpg") ?>' >Open popup 1</a>
        <a class="image-link" href='<?= Url::to("@web/images/gallery/002.jpg") ?>' >Open popup 2</a>
        <a class="image-link" href='<?= Url::to("@web/images/gallery/003.jpg") ?>' >Open popup 3</a>

    </div>

    <script>
        
    </script>
</div>
