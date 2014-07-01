<?php

namespace Fuel\Migrations;

class Create_articles
{
	public function up()
	{
		\DBUtil::create_table('articles', array(
			'article_id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'title' => array('constraint' => 50, 'type' => 'varchar'),
			'name' => array('constraint' => 50, 'type' => 'varchar'),
			'body' => array('type' => 'text'),
			'digest' => array('type' => 'text'),
			'tag' => array('type' => 'text'),
			'img' => array('constraint' => 100 ,'type' => 'varchar'),
			'category' => array('constraint'=> 50, 'type' => 'varchar'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('article_id'));
	}

	public function down()
	{
		\DBUtil::drop_table('articles');
	}
}