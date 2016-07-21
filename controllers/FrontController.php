<?php


namespace app\controllers;


use yii\data\ArrayDataProvider;
use yii\web\Controller;

class FrontController extends Controller
{
    public function actionIndex()
    {
        $data = \Yii::$app->runAction('rest/index', ['offset'=> 0]);

        $dataProvider = new ArrayDataProvider([
            'allModels' => $data,
            'sort' => [
                'attributes' => ['id', 'date', 'owner', 'guest', 'stadium'],
            ],
            'pagination' => [
                'pageSize' => 50,
            ],
        ]);

        echo  $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
}