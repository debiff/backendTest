<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;

$this->title = 'Placements';
$this->params['breadcrumbs'][] = $this->title;
?>
    <!-- /.box-header -->
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Publisher overview</h3>

                <div class="box-tools">
                </div>
            </div>
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Site</th>
                    </tr>
                    <?php foreach ($placements as $placement): ?>
                        <h1><?= Html::encode("{$placement}") ?></h1>
                        <tr>
                            <td><?= Html::encode("{$placement->id}") ?></td>
                            <td><?= Html::encode("{$placement->name}") ?></td>
                            <td><?= Html::encode("{$placement->site}") ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
