<?php


namespace app\controllers;


use app\models\MainModel;
use yii\helpers\ArrayHelper;
use yii\rest\Controller;
use yii\web\Response;

/**
 * TODO add paginator to output
 * Class RestController
 * @package app\controllers
 */
class RestController extends Controller
{
    public function actionIndex()
    {
        \Yii::$app->response->format = Response::FORMAT_JSON;

        $model = MainModel::find()
            ->all();

        $data = ArrayHelper::toArray($model, [
            'id', 'date', 'owner', 'guest', 'stadium'
        ]);

        return $data;
    }
}