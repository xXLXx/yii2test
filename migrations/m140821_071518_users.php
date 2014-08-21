<?php

use yii\db\Schema;
use yii\db\Migration;

class m140821_071518_users extends Migration
{
    public function up()
    {
    	return $this->createTable('users', array(
    		'id' => 'INT PRIMARY KEY AUTO_INCREMENT',	
	        'fname' => 'VARCHAR(255)',
	        'lname' => 'TEXT',
	        'create_time' => 'INT',
	        'update_time' => 'INT',
    		));
    }

    public function down()
    {
        return $this->dropTable('users');
    }
}
