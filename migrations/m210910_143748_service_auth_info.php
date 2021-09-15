<?php

use yii\db\Migration;

/**
 * Class m210910_143748_service_auth_info
 */
class m210910_143748_service_auth_info extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("CREATE TABLE service_auth_info
                (
                id int NOT NULL AUTO_INCREMENT,
                am_id int NOT NULL,
                phone varchar(20) NOT NULL,
                password varchar(100) NOT NULL,
                email_check tinyint NULL DEFAULT 0 COMMENT '0-not confirm 1-confirm',
                registry_check tinyint DEFAULT 0 COMMENT '0-not confirm 1-confirm',
                PRIMARY KEY (id),
                FOREIGN KEY (am_id)
                    REFERENCES arbitration_manager(id)
                    ON DELETE CASCADE                 
                )ENGINE=INNODB COLLATE=utf8mb4_0900_ai_ci;"

        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return $this->dropTable("service_auth_info");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210910_143748_service_auth_info cannot be reverted.\n";

        return false;
    }
    */
}
