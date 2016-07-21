<?php
use yii\grid\GridView;
//
echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',
        'date:datetime',
        'owner',
        'guest',
        'stadium'
    ],
]);
