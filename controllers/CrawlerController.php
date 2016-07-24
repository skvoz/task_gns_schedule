<?php


namespace app\controllers;


use app\models\MainModel;
use HTTP_Request2;
use yii\web\Controller;

class CrawlerController extends Controller
{
    public function actionIndex()
    {
        $request = new HTTP_Request2('https://api.fantasydata.net/mlb/v2/JSON/Games/2015}');
        $url = $request->getUrl();

        $headers = array(
            // Request headers
            'Ocp-Apim-Subscription-Key' => \Yii::$app->params['key'],
        );

        $request->setHeader($headers);

        $parameters = array(// Request parameters
        );

        $url->setQueryVariables($parameters);

        $request->setMethod(HTTP_Request2::METHOD_GET);

// Request body
        $request->setBody("{body}");

        try {
            $response = $request->send();
            $model = new MainModel();
            $result = $model->loadFromResponse($response);
            if ($result === false) {
                die($model->pdoErrors);
            }
        } catch (HttpException $ex) {
            echo $ex;
        }

        return $this->render('index', [
            'result' => $result,
        ]);

    }
}