<?php

use yii\db\Migration;

/**
 * Class m210916_094310_users
 */
class m210916_094310_users extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
            $this->execute("CREATE TABLE users
            (
            id int NOT NULL AUTO_INCREMENT,
            id_am int NULL DEFAULT 0 UNIQUE COMMENT 'NULL-means that user is moderator',
            password varchar(255) NOT NULL,
            email varchar(100) NOT NULL,
            email_check tinyint NULL DEFAULT 0 COMMENT '0-not confirm 1-confirm',
            registry_check tinyint DEFAULT 0 COMMENT '0-not confirm 1-confirm',
            auth_key varchar(250) NULL,
            access_token varchar(250) NULL,
            PRIMARY KEY (id),
            FOREIGN KEY (id_am)
            REFERENCES arbitration_manager(id)
                    ON DELETE CASCADE                 
                )ENGINE=INNODB COLLATE=utf8mb4_0900_ai_ci;
            ");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return $this->dropTable("users");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210916_094310_users cannot be reverted.\n";

        return false;
    }
    */
}
