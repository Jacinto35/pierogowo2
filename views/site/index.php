<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'Pierogowo.pl';

?>
<div class="site-index">
    <div class="body-content">

        <div class="row">
            <div class="col-lg-6">
                <h2>Atualności</h2>
                <ul>
                    <li>Zapraszamy na pyzy z mięsem!<br/>
                        Porcja na ciepło (6 sztuk) w cenie 11,50 zł, zimne na wagę (1 kg) w cenie 26,80 zł.
                    </li>
                    <li>PROMOCJA! Codziennie w godz. 10:00-12:00 wszystkie pierogi* w lokalu -15%!<br/>* - tylko ciepłe
                        porcje
                    </li>
                    <li>Organizujemy przyjęcia okolicznościowe (np. komunie, chrzciny) max. do 20 osób. Zapraszamy do
                        zapoznania się z naszą ofertą!
                    </li>
                </ul>

                <div class="opening-hours">
                    <h4>Pierogowo.pl otwarte jest w następujące dni:</h4>
                    <p>poniedziałek - piątek w godz. 10:00 - 19:00</p>
                    <p>sobota w godz. 11:00 - 16:00</p>

                    Zapraszamy!
                </div>
            </div>
            <div class="col-lg-6 soups">
                <a href='<?= URL::to(["site/soup-of-the-day"]) ?>'>
                    <?= Html::img('@web/images/soup_of_the_day.jpg', ['class' => "img-rounded img-responsive"]) ?>
                </a>
            </div>
        </div>

    </div>
</div>
