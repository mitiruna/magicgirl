<?php

use Fuel\Core;

/**
 * お問い合わせ　コントローラ
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Infomation extends Core\Controller {

    public function action_index() {
        // ===========================
        // 基本表示用ビューの設定
        // ===========================
        $view =  View::forge('infomation');
        $view->header = View::forge('common/header');
        $view->navbar = View::forge('common/navbar');
        $view->footer = View::forge('common/footer');
        
        // ===========================
        // コンテンツの設定
        // ===========================
        $view->info = 'お問い合わせ';
        
        return $view;
    }
}
