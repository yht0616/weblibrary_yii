<?php

class m140614_195759_create_book_table extends CDbMigration
{
	public function up()
	{
     $this->createTable('book', array(
            'id' => 'pk',
            'name' => 'string NOT NULL',
        ));
	}

	public function down()
	{
    $this->DropTable('book');
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
