<?php

class Model_Infomation extends \Orm\Model
{
	protected static $_properties = array(
		
		'id',
		'name',
		'mailaddress',
		'item_id',
		'content',
		'created_at',
		'updated_at',
	);
        
        protected static $_primary_key = array('id');

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_insert', 'before_update'),
			'mysql_timestamp' => false,
		),
	);

	protected static $_table_name = 'infomations';

}
