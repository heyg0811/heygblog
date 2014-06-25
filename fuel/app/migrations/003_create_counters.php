<?php

namespace Fuel\Migrations;

class Create_counters
{
	public function up()
	{
		\DBUtil::create_table('counters', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'ip' => array('constraint' => 50, 'type' => 'varchar'),
			'path' => array('constraint' => 50, 'type' => 'varchar'),
			'article_id' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('counters');
	}
}