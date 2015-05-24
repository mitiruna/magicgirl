<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Fuel\Migrations;

/**
 * Description of 001_create_meta
 *
 * @author Nakamura Yukinori
 */
class Create_meta 
{
    public function up()
	{
		\DBUtil::create_table('meta', array(
			'id' => array('constraint' => 11, 'type' => 'int'),
			'type' => array('constraint' => 20, 'type' => 'varchar'),
                        'key' => array('constraint' => 20, 'type' => 'smallint'),
			'value' => array('constraint' => 30, 'type' => 'varchar'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('meta');
	}
}
