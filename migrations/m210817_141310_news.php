<?php

use yii\db\Migration;

/**
 * Class m210817_141310_news
 */
class m210817_141310_news extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {   
        $this->execute(
                "CREATE TABLE news
                    (
                    id          int NOT NULL AUTO_INCREMENT,
                    title       varchar(200) NOT NULL,
                    text        text NOT NULL,
                    img_path    varchar(50) NULL,
                    create_date datetime default CURRENT_TIMESTAMP,
                    PRIMARY KEY (id)
                     )ENGINE=INNODB COLLATE=utf8mb4_0900_ai_ci;
                    " 
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return $this->droptable('news');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210817_141310_news cannot be reverted.\n";

        return false;
    }
    */
}
