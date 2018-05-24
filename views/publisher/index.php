<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;

$this->title = 'Publisher';
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
                    <?php foreach ($publishers as $publisher): ?>
                        <tr>
                            <td><?= Html::encode("{$publisher->id}") ?></td>
                            <td><?= Html::encode("{$publisher->name}") ?></td>
                            <td><?= Html::encode("{$publisher->site}") ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Insert Publisher</h3>
            </div>
            <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'name') ?>

                <?= $form->field($model, 'site') ?>

                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>