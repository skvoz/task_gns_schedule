<?php

/* @var $this yii\web\View */

use app\models\MatrixForm;
use yii\helpers\Url;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Test project for GNS</h1>

        <p class="lead">author Perevozchikov Konstantin</p>
        <small>project base at yii2 framework with sqlite database</small>

        <a href="mailto:skvoz.ne@gmail.com">skvoz.ne@gmail.com</a>
    </div>

    <div class="body-content">
        <div class="row">
            <h2>crowler</h2>
            <p>Subject: create 3 controller: crawler, rest api, front. See links below.</p>
            <p>Target site : https://developer.fantasydata.com/docs/services/54bb5fd214338d0950b86dfe/operations/54bf2b9814338d0f80af6cc5</p>
            <?=\yii\helpers\Html::a(
                '<b>crawler</b> - db with data but you can lick on link , or start on console, or see in github',
                ['crawler/index'])?> <br/>

            <?=\yii\helpers\Html::a(
                '<b>rest</b> - return data in json format',
                ['rest/index'])?><br/>

            <?=\yii\helpers\Html::a(
                '<b>front</b> - display schedule',
                ['front/index'])?>
            <h2>matrix</h2>
            <?php
            use yii\helpers\Html;
            use yii\widgets\ActiveForm;
            ?>
            <?php

            $form = ActiveForm::begin([
                'action' => Url::to(['matrix/index'])
            ]); ?>

            <?= $form->field($model, 'size') ?>
            <?= $form->field($model, 'x') ?>

            <?= $form->field($model, 'y') ?>
            <?php

            if ($round >= 0) {
                echo sprintf("<h2>round for solution last subject=%s</h2>", $round);
            }
            ?>

            <div class="form-group">
                <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>
