<?php

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
        $view->header = View::forge('common/header');
        $view->navbar = View::forge('common/navbar');
        $view->footer = View::forge('common/footer');
        
        // ===========================
        // コンテンツの設定
        // ===========================
        //タイトル取得
        $view->title = Model_Setting::get_title();
        $view->news = '最新情報';
        //print_r($view->news, true);
        $fp = fopen('php://stderr', 'w');
        fputs($fp, $view->news);
        //file_put_contents('php://stderr', $view->news, FILE_APPEND);

        return $view;
    }
}
