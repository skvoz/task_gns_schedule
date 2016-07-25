<?php


namespace app\models;


use yii\base\Model;

/**
 * Class MatrixForm
 * @package app\models
 */
class MatrixForm extends Model
{
    /**
     * @var
     */
    public $x;
    /**
     * @var
     */
    public $y;
    /**
     * matrix size
     * @var
     */
    public $size;

    public function rules()
    {
        return [
            [['size', 'x', 'y'], 'required'],
            ['x', 'compare', 'compareValue' => 0, 'operator' => '>='],
            ['y', 'compare', 'compareValue' => 0, 'operator' => '>='],
        ];
    }
}