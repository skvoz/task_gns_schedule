<?php

namespace app\models;

use Yii;
use yii\db\Exception;

/**
 * This is the model class for table "main".
 *
 * @property integer $id
 * @property string $date
 * @property string $owner
 * @property string $guest
 * @property integer $stadium
 */
class MainModel extends \yii\db\ActiveRecord
{
    public $pdoErrors;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'main';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['stadium'], 'integer'],
            [['owner', 'guest'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'owner' => 'Owner',
            'guest' => 'Guest',
            'stadium' => 'Stadium',
        ];
    }

    public function loadFromResponse(\HTTP_Request2_Response $response)
    {
        $code = $response->getStatus();
        if ($code !== 200)
            return ['status' => 'error', 'code' => $code];

        $body = $response->getBody();
        if ($body) {
            $body = \GuzzleHttp\json_decode($body);
        }
        try {

            foreach ($this->parseBody($body) as $n => $object) {
                $this->saveToDb($object, Yii::$app->db);
            }
        } catch (Exception $e) {
            $this->pdoErrors = $e->getMessage();

            return false;
        }

        return true;

    }

    private function parseBody($body)
    {
        $i = 0;

        while (true) {
            if($i>= count($body))
                break;

            yield $body[$i];
            $i++;
        }
    }

    function saveToDb($object, $conn)
    {
        $sql = <<<SQL
    INSERT INTO main (date, owner, guest, stadium)
    VALUES ('{$object->DateTime}', '{$object->HomeTeam}', '{$object->AwayTeam}', {$object->StadiumID});
SQL;
        $statment = $conn->createCommand($sql)
            ->execute();
    }
}
