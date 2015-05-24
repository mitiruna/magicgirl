<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of meta
 *
 * @author Nakamura Yukinori
 */
class Model_Meta extends \Orm\Model {

    protected static $_properties = array(
        'id',
        'type',
        'key',
        'value',
    );
    protected static $_primary_key = array('id');
    protected static $_table_name = 'meta';

    /**
     * タイプ名に一致するメタリストを取得する
     * @param string $typeName タイプ名
     * @param boolean $idFlag true=IDで取得, false=keyで取得
     * @return メタリスト
     */
    public static function get_meta_list($typeName, $idFlag = false) {
        $list = Model_Meta::find('all', array(
                    'where' => array(
                        array('type', $typeName)
                    )
        ));
        $get = $idFlag ? 'id' : 'key';
        $result = array();
        foreach ((array)$list as $row){
            //\Fuel\Core\Log::error(print_r($row, true));
            $result[$row->_data[$get]] = $row->_data['value'];
        }
        
        return $result;
    }

}
