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
class Controller_Infomation_Infomation extends Controller {

    /**
     * お問い合わせメインページ
     * @return type
     */
    public function action_index() {
        // ===========================
        // 基本表示用ビューの設定
        // ===========================
        $view = View::forge('infomation/infomation');
        $view->header = View::forge('common/header');
        $view->navbar = View::forge('common/navbar');
        $view->footer = View::forge('common/footer');

        // ===========================
        // コンテンツの設定
        // ===========================
        //タイトル取得
        $view->title = Model_Setting::get_title();
        //お問い合わせ項目リスト
        $view->info_list = Model_Meta::get_meta_list('info_content');
        
        //var_dump(Model_Infomation::find(4));

        $view->flash = Session::get_flash('info_data');

        $view->info = 'お問い合わせ';

        return $view;
    }

    /**
     * お問い合わせ確認ページ
     * @return type
     */
    public function action_confirm() {
        //バリデーションの作成
        $validation = $this->forge_validation();

        //**********************************
        //検証成功の場合確認画面表示
        //検証失敗の場合お問い合わせ画面に戻る
        //**********************************
        if ($validation->run() and Core\Security::check_token()) {
            //----------------------
            //成功
            //----------------------
            $data['input'] = $validation->validated();
            //項目名取得
//            $d = Model_Meta::find(3);
//
//            $data['input']['content'] = $d->value;
            
            $view = View::forge('infomation/confirmation', $data);
            $view->info = 'お問い合わせ確認';
        } else {
            //----------------------
            //失敗
            //----------------------
            //入力データをセッションに保存
            Core\Session::set_flash('info_data', $validation->input());
            //エラーをセッションに保存
            Core\Session::set_flash('error', $validation->show_errors());
            Core\Response::redirect('infomation/infomation');
        }

        // ===========================
        // 基本表示用ビューの設定
        // ===========================
        $view->header = View::forge('common/header');
        $view->navbar = View::forge('common/navbar');
        $view->footer = View::forge('common/footer');

        // ===========================
        // コンテンツの設定
        // ===========================
        //タイトル取得
        $view->title = Model_Setting::get_title();

        return $view;
    }

    /**
     * 送信完了ページ
     * @return type
     */
    public function action_complete() {

        $validation = $this->forge_validation();

        //登録時再度バリデーションとトークンチェックを行う。
        if ($validation->run() and Security::check_token()) {
            $view = View::forge('infomation/complete');
            $data = $validation->validated();

            //*********************************
            //DB登録処理
            //*********************************
            $infomation = Model_Infomation::forge();
            $infomation->set('name', $data['info_name']);               //名前
            $infomation->set('mailaddress', $data['info_mailaddress']); //メールアドレス
            $infomation->set('item_id', $data['info_content']);         //項目
            $infomation->set('content', $data['info_text']);            //内容

            try {
                Core\DB::start_transaction();

                //保存
                $result = $infomation->save();

                Core\DB::commit_transaction();
            } catch (Exception $e) {
                Core\DB::rollback_transaction();
                Core\Log::error('infomation db save error');
            }
        } else {
            //----------------------
            //失敗
            //----------------------
            //エラーをセッションに保存
            Core\Session::set_flash('error', $validation->show_errors());
            //エラーページへリダイレクト
            Core\Response::redirect('error');
        }

        // ===========================
        // 基本表示用ビューの設定
        // ===========================
        $view->header = View::forge('common/header');
        $view->navbar = View::forge('common/navbar');
        $view->footer = View::forge('common/footer');

        // ===========================
        // コンテンツの設定
        // ===========================
        //タイトル取得
        $view->title = Model_Setting::get_title();

        return $view;
    }

    /**
     * お問い合わせの検証
     */
    private function forge_validation() {
        //バリデーションインスタンス生成
        $vali = Core\Validation::forge();

        //**************************
        //お名前
        //**************************
        $vali->add('info_name', 'お名前')
                ->add_rule('trim')
                ->add_rule('required')
                ->add_rule('max_length', 30);

        //**************************
        //メールアドレス
        //**************************
        $vali->add('info_mailaddress', 'メールアドレス')
                ->add_rule('trim')
                ->add_rule('required')
                ->add_rule('max_length', 30)
                ->add_rule('valid_email');

        //**************************
        //お問い合わせ項目
        //**************************
        $vali->add('info_content', 'お問い合わせ項目')
                ->add_rule('required');

        //**************************
        //内容
        //**************************
        $vali->add('info_text', '内容')
                ->add_rule('required')
                ->add_rule('max_length', 500);

        return $vali;
    }

}
