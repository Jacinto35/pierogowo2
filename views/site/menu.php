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
        </div>
    </div>
</div>
