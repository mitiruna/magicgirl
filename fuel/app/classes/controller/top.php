<?php

include dirname(__FILE__) . '/../../config/define.php';
use Fuel\Core;

/**
 * トップページ　コントローラ
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Top extends Core\Controller {

    public function action_index() {
        // ===========================
        // 基本表示用ビューの設定
        // ===========================
        $view =  View::forge('top');
        
        // ===========================
        // コンテンツの設定
        // ===========================
        //タイトル取得
        $view->title = Model_Setting::get_title();
        $view->news = '最新情報';
        
        $view->news_list = Model_News::find('all', array(
            'limit' => NEWS_LIMIT,
            'order_by' => array('created_at' => 'DESC'),
        ));
        
        return $view;
    }
}
