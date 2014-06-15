<?php

class m140615_090100_add_id_to_catalog extends CDbMigration
{
	public function up()
	{
      $this->createTable('catalog', array(
        'id' => 'INTEGER PRIMARY KEY AUTOINCREMENT  NOT NULL',
        'book_id' => 'INTEGER NOT NULL',
        'author_id' => 'INTEGER NOT NULL',
      ));
	}

	public function down()
	{
      $this->dropTable('catalog');
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
