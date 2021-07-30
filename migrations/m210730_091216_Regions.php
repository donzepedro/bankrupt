<?php

use yii\db\Migration;

/**
 * Class m210730_091216_Regions
 */
class m210730_091216_Regions extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
            $this->execute("CREATE TABLE regions
            (
            id int NOT NULL AUTO_INCREMENT,
            region varchar(255) NOT NULL,
  
            PRIMARY KEY(id)
            );
                
        ");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return $this->dropTable("regions");

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210730_091216_Regions cannot be reverted.\n";

        return false;
    }
    */
}
