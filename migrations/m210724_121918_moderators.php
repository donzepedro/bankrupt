<?php

use yii\db\Migration;

/**
 * Class m210724_121918_moderators
 */
class m210724_121918_moderators extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("CREATE TABLE moderators
            (
            id int NOT NULL AUTO_INCREMENT,
            lname varchar(45) NOT NULL,
            fname varchar(45) NOT NULL,
            username varchar(32) NOT NULL,
            password varchar(250) NULL,
            auth_key varchar(250) NULL,
            access_token varchar(250) NULL,
            
            PRIMARY KEY(id)
            );
                
        ");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return $this->dropTable("moderators");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210724_121918_moderators cannot be reverted.\n";

        return false;
    }
    */
}
