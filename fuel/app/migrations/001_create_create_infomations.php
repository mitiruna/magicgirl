<?php

namespace Fuel\Migrations;

class Create_create_infomations
{
	public function up()
	{
		\DBUtil::create_table('infomations', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'name' => array('constraint' => 20, 'type' => 'varchar'),
			'mailaddress' => array('constraint' => 30, 'type' => 'varchar'),
			'item_id' => array('constraint' => 11, 'type' => 'int'),
			'content' => array('type' => 'text'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('infomations');
	}
}