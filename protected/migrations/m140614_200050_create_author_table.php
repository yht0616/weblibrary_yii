<?php

class m140614_200050_create_author_table extends CDbMigration
{
	public function up()
	{
    $this->createTable('author', array(
            'id' => 'pk',
            'name' => 'string NOT NULL',
        ));
}

	public function down()
	{
    $this->DropTable('author');
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
