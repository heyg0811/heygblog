<?php

namespace Fuel\Migrations;

class Create_comments
{
	public function up()
	{
		\DBUtil::create_table('comments', array(
			'comment_id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'article_id' => array('constraint' => 11, 'type' => 'int'),
			'name' => array('constraint' => 50, 'type' => 'varchar'),
			'body' => array('type' => 'text'),
			'admin' => array('constraint' => 1, 'type' => 'int', 'default' => 0),
			'mail' => array('constraint' => 255, 'type' => 'varchar'),
			'site' => array('constraint' => 255, 'type' => 'varchar'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('comment_id'));
	}

	public function down()
	{
		\DBUtil::drop_table('comments');
	}
}