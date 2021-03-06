<?php

use Fuel\Core;

/**
 * サークル紹介　コントローラ
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Introduce extends Controller {

    /**
     * サークル紹介メインページ
     * @return type
     */
    public function action_index() {
        // ===========================
        // 基本表示用ビューの設定
        // ===========================
        $view = View::forge('introduce');
        $view->header = View::forge('common/header');
        $view->navbar = View::forge('common/navbar');
        $view->footer = View::forge('common/footer');

        // ===========================
        // コンテンツの設定
        // ===========================
        //タイトル取得
        $view->title = Model_Setting::get_title();

        $view->news = 'サークル紹介';

        return $view;
    }

}
