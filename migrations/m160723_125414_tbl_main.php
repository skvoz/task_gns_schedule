<?php

use yii\db\Migration;

class m160723_125414_tbl_main extends Migration
{
    public function up()
    {
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        /** @var Migration $this */
        $this->createTable('main', [
           'id' => $this->primaryKey(),
            'date' => $this->string(255),
            'owner' => $this->string(255),
            'guest' => $this->string(255),
            'stadium' => $this->integer(11),
        ], $tableOptions);
    }

    public function down()
    {
        echo "m160723_125414_tbl_main cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
