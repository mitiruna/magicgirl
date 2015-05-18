<?php

use Fuel\Core;

class Model_Setting extends \Orm\Model
{
	protected static $_properties = array(
		
		'id',
		'setting_id',
		'value',
	);

	protected static $_table_name = 'settings';
        
        /**
         * ホームページタイトルの取得
         * @return object タイトルオブジェクト
         */
        public static function get_title(){
            $title = Model_Setting::find(array(
               'where' => array('setting_id', 'homepage_title'), 
            ));
            return $title;
        }

}
