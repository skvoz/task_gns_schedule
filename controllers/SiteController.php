<?php

namespace app\controllers;

use app\models\MatrixForm;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $model = new MatrixForm();
        $round = Yii::$app->request->get('round');
        $model->x = Yii::$app->request->get('x');
        $model->size = Yii::$app->request->get('size');
        $model->y = Yii::$app->request->get('y');

        return $this->render('index', [
            'model' => $model,
            'round' => $round,

        ]);
    }

    public function actionInfo()
    {
        phpinfo();
    }
}
