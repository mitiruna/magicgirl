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
class Controller_Top extends Controller {

    public function action_index() {
        // ===========================
        // 基本表示用ビューの設定
        // ===========================
        $view =  View::forge('top/top');
        $view->navbar = View::forge('common/navbar');
        $view->footer = View::forge('common/footer');
        
        // ===========================
        // コンテンツの設定
        // ===========================
        $view->news = '最新情報';
        
        return $view;
    }
}
