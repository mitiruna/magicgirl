<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title->value ?></title>
        <?phpuse Fuel\Core; ?>
        <?php echo Asset::css('bootstrap.min.css'); ?>
        <?php echo Asset::css('magicgirl-bootstrap.css'); ?>
        <?php echo Asset::css('bootstrap-theme.min.css'); ?>
        <?php echo Asset::css('infomation-style.css'); ?>
        <?php echo Asset::js('jquery-2.1.4.min.js'); ?>
        <?php echo Asset::js('info-confirm.js'); ?>
    </head>
    <body id="infomation" class="main">
        <div class="main-contents">
            <div class="container">
<?php echo $header ?>
<?php echo $navbar ?>
                <div class="contents">
                    <div class="form-horizontal">
                            <table class="table-bordered info_form">
                                <h4 class="text-center">送信が正常に完了しました。</p>
                                    お問い合わせいただきまして、ありがとうございます。</h4>
                            </table>
                        <div class="btn_send">
                            <a href="/top"><button name="btn_back" class="btn btn-default" >トップページに戻る</button></a>
                        </div>
                    </div>
                </div>
<?php echo $footer ?>
            </div>
        </div>
        <!--<button type="button" class="btn btn-primary" value="ボタンだよ" >ボタンだよ</button>-->

    </body>
</html>

