<?php

class m140614_200111_create_user_table extends CDbMigration
{
	public function up()
	{
    $this->createTable('user', array(
            'id' => 'pk',
            'login' => 'string NOT NULL',
            'email' => 'string NOT NULL',
            'encrypted_password' => 'string NOT NULL',
        ));
}

	public function down()
	{
    $this->DropTable('user');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}
