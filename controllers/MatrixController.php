<?php

namespace app\controllers;


use app\models\MatrixForm;
use yii\web\Controller;

class MatrixController extends Controller
{
    public function actionIndex()
    {
        $form = new MatrixForm();
        $form->load(\Yii::$app->request->post(), 'MatrixForm');
        $size = $form->size;
        $x = $form->x;
        $y = $form->y;

        $foo = $x > $y ? $y : $x;

        $round = $size - $foo + 1;

        $this->redirect(['site/index',
            'round' => $round,
            'size' => $size,
            'x' => $x,
            'y' => $y,
        ]);
    }

    public function crateArray($size)
    {
        $arr = [];
        for ($y = 1; $y <= $size; $y++) {
            for ($x = 1; $x <= $size; $x++) {
                $arr[$x][$y] = 0;
            }
        }

        return $arr;
    }
}