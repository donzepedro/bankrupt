<?php

use yii\db\Migration;

/**
 * Class m210803_105043_arbitration_managers_v2
 */
class m210803_105043_arbitration_managers_v2 extends Migration
{
    public function safeUp(){
     $this->execute("CREATE TABLE arbitration_manager
                            (
                             id                       int NOT NULL  AUTO_INCREMENT,
                             lname                    varchar(20) NOT NULL ,
                             fname                    varchar(20) NOT NULL ,
                             mname                    varchar(20) NULL DEFAULT NULL ,
                             birth_date               date NULL DEFAULT NULL ,
                             post_addr                varchar(255) NULL DEFAULT NULL ,
                             inn                      int(12) NULL DEFAULT NULL,
                             phone_number             int NULL DEFAULT NULL ,
                             job_region               varchar(50) NULL DEFAULT NULL ,
                             government_secret_access tinyint(1) NULL DEFAULT NULL ,
                             legal_phys               int NULL DEFAULT NULL COMMENT '0-phys/1-legal' ,
                             SRO_AM_name              varchar(100) NOT NULL ,
                             bankrupt_categoties      tinyint(2) NOT NULL COMMENT 'categories of clients(bankrupt/creditor) 0-phys 1-legal 3-both' ,
                             debtor_categories          tinyint(2) NOT NULL COMMENT 'categories of debtors(bankrupt/creditor) 0-phys 1-legal 3-both' ,
                             count_of_procedure_phys  int NOT NULL ,
                             count_of_procedure_legal int NOT NULL ,
                             procedure_time_average   float NOT NULL COMMENT 'procedure_time_average months' ,
                             start_date               date NOT NULL ,
                             end_date                 date NULL ,
                             path_to_img              varchar(100) NULL ,

                            PRIMARY KEY (id)
                            ) ENGINE=INNODB COLLATE=utf8mb4_0900_ai_ci;
                        ");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {
        
        return $this->dropTable("arbitration_manager");
    }
}
