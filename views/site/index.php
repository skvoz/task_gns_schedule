<?php

/* @var $this yii\web\View */

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
        </div>
    </div>
</div>
