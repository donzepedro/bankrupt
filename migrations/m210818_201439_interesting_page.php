<?php

use yii\db\Migration;

/**
 * Class m210818_201439_interesting_page
 */
class m210818_201439_interesting_page extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
            $this->execute(
                "CREATE TABLE interesting_page
                    (
                    id          int NOT NULL AUTO_INCREMENT,
                    news_id     int,                    
                    PRIMARY KEY (id),
                    FOREIGN KEY (news_id)
                        REFERENCES news(id)
                        ON DELETE CASCADE
                     )ENGINE=INNODB COLLATE=utf8mb4_0900_ai_ci;
                    " 
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return $this->dropTable("interesting_page");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210818_201439_interesting_page cannot be reverted.\n";

        return false;
    }
    */
}
