<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title->value ?></title>
        <?php use Fuel\Core; ?>
        <?php echo Asset::css('bootstrap.min.css'); ?>
        <?php echo Asset::css('magicgirl-bootstrap.css'); ?>
<?php echo Asset::css('bootstrap-theme.min.css'); ?>
<?php echo Asset::css('infomation-style.css'); ?>
    </head>
    <body id="infomation" class="main">
        <div class="main-contents">
            <div class="container">
<?php echo $header ?>
<?php echo $navbar ?>
                <div class="contents">
                    <div class="headline"><?php echo $info ?></div>
                    <form action="./infomation/confirm" method="post">
                    <?php echo Core\Form::csrf() ?>
                    <div class="form-horizontal">
                            <table class="table-bordered info_form">
                                <div class="alert-danger"><?php echo Core\Session::get_flash('error') ?></div>
                                <div class="info_head"><span class="important">*</span>が付いている項目は必須入力です。</div>
                                <tbody>
                                    <tr>
                                        <td class="label_item"><label class="control-label">お名前<span class="important">*</span></label></td>
                                        <td class="form_contents">
                                            <div class="col-sm-10"><?php echo Form::input('info_name', isset($flash['info_name']) ? $flash['info_name'] : null, array('class' => 'form-control')); ?></div></td>
                                    </tr>
                                    <tr>
                                        <td class="label_item"><label class="control-label">メールアドレス<span class="important">*</span></label></td>
                                        <td class="form_contents"><div class="col-sm-10"><?php echo Form::input('info_mailaddress', isset($flash['info_mailaddress']) ? $flash['info_mailaddress'] : null, array('class' => 'form-control')); ?></div></td>
                                    </tr>
                                    <tr>
                                        <td class="label_item"><label class="control-label">お問い合わせ項目<span class="important">*</span></label></td>
                                        <td class="form_contents">
                                            <div class="col-sm-10">
                                                <?php echo Core\Form::select('info_content', isset($flash['info_content']) ? $flash['info_content'] : null , $info_list, array('class' => 'form-control')) ?>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td class="label_item"><label class="control-label">内容<span class="important">*</span></label></td>
                                        <td class="form_contents"><div class="col-sm-10"><?php echo Form::textarea('info_text', isset($flash['info_text']) ? $flash['info_text'] : null, array('class' => 'form-control', 'rows' => 10)); ?></div></td>
                                    </tr>
                                </tbody>
                            </table>
                        <div class="btn_send"><button type="submit" name="btn_send" class="btn btn-primary" >確認</button></div>
                    </div>
                    </form>
                    <hr>
                </div>
<?php echo $footer ?>
            </div>
        </div>
        <!--<button type="button" class="btn btn-primary" value="ボタンだよ" >ボタンだよ</button>-->

    </body>
</html>

