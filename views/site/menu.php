<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Menu';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-menu">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <?php if (!empty($menuModel)) {
                foreach ($menuModel as $menu) {

                    ?>
                    <table class="table table-striped">
                        <thead>
                        <th><?= $menu->name ?></th>
                        <th class='text-right'><?= $menu->measure ?></th>
                        </thead>
                        <?php if ($menu->additional_info) { ?>
                            <tfoot>
                            <tr>
                                <td colspan='2'><?= $menu->additional_info?></td>
                            </tr>
                            </tfoot>
                        <?php } ?>

                        <tbody>
                        <?php if (!empty($menu->items)) {
                            foreach ($menu->items as $item) {
                                if ($item->active == '1') {
                                    ?>
                                    <tr>
                                        <td><?= $item->description ?></td>
                                        <td class='text-right'><?= $item->price ? number_format($item->price, 2) . ' zł' : '-'; ?></td>
                                    </tr>
                                <?php }
                            }
                        } ?>
                        </tbody>
                    </table>
                    <?php
                }
            } ?>

            <div class='shipping_info'>
                <h4>Dowóz - zasady:</h4>
                <ul>
                <li>dostawy realizujemy w godz. od 11:00 do 18:00 (pon.-pt.) oraz od 11:00 do 16:00 (sob.)</li>
                    <li>przy dowozach płatność tylko gotówką</li>
                    <li>minimalna kwota zamówienia to 25,00 zł</li>
                    <li>bezpłatny dowóz w promieniu do 5 km - powyżej dodatkowo 2,00 zł za każdy kolejny kilometr</li>
                    <li>do kosztów każdej porcji na wynos/z dowozem doliczamy koszt opakowania - 0,80 zł</li>
                </ul>

                <strong>UWAGA! Możliwość płatności kartą tylko w lokalu!</strong>


                </div>
        </div>
    </div>
</div>
