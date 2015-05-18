<?php

namespace Fuel\Migrations;

class Create_create_settings
{
	public function up()
	{
		\DBUtil::create_table('settings', array(
			'id' => array('constraint' => 11, 'type' => 'int'),
			'setting_id' => array('constraint' => 20, 'type' => 'varchar'),
			'value' => array('constraint' => 30, 'type' => 'varchar'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('settings');
	}
}