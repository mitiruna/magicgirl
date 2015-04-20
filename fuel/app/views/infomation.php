<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>魔法少女</title>
        <?php

        use Fuel\Core; ?>
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
                    <form action="infomation.php" method="post">
                    <div class="form-horizontal">
                            <table class="table-bordered info_form">
                                <div class="info_head"><span class="important">*</span>が付いている項目は必須入力です。</div>
                                <tbody>
                                    <tr>
                                        <td class="label_item"><label class="control-label">お名前<span class="important">*</span></label></td>
                                        <td class="form_contents"><div class="col-sm-10"><input type="text" name="info_name" class="form-control" required="true" /></div></td>
                                    </tr>
                                    <tr>
                                        <td class="label_item"><label class="control-label">メールアドレス<span class="important">*</span></label></td>
                                        <td class="form_contents"><div class="col-sm-10"><input type="text" name="info_mailaddress" class="form-control" required="true" /></div></td>
                                    </tr>
                                    <tr>
                                        <td class="label_item"><label class="control-label">お問い合わせ項目<span class="important">*</span></label></td>
                                        <td class="form_contents">
                                            <div class="col-sm-10">
                                                <select class="form-control">
                                                    <option selected>-- こちらから選択してください --</option>
                                                    <option>製品について</option>
                                                    <option>サイトについて</option>
                                                    <option>ご意見・ご感想</option>
                                                    <option>バグ・不具合報告</option>
                                                </select>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td class="label_item"><label class="control-label">内容<span class="important">*</span></label></td>
                                        <td class="form_contents"><div class="col-sm-10"><textarea name="info_mailaddress" class="form-control" rows="10"required="true" ></textarea></div></td>
                                    </tr>
                                </tbody>
                            </table>
                        <div class="btn_send"><button type="submit" name="btn_send" class="btn btn-primary" >送信</button></div>
                    </div>
                    </form>
                </div>
<?php echo $footer ?>
            </div>
        </div>
        <!--<button type="button" class="btn btn-primary" value="ボタンだよ" >ボタンだよ</button>-->

    </body>
</html>

