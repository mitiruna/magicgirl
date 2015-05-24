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
        <?php echo Asset::js('jquery-2.1.4.min.js'); ?>
        <?php echo Asset::js('info-confirm.js'); ?>
    </head>
    <body id="infomation" class="main">
        <div class="main-contents">
            <div class="container">
                <?php echo $header ?>
                <?php echo $navbar ?>
                <div class="contents">
                    <div class="headline"><?php echo $info ?></div>
                    <form action="infomation" method="post" id="submit_form">
                        <div class="form-horizontal">
                            <table class="table-bordered info_form">
                                <div class="info_head">
                                    下記の内容で送信します。<br>
                                    よろしければ送信ボタン、内容を修正する場合は修正ボタンを押してください。
                                </div>
                                <tbody>
                                    <tr>
                                        <td class="label_item"><label class="control-label">お名前</label></td>
                                        <td class="form_contents"><div class="col-sm-10"><?php echo $input['info_name'] ?></div></td>
                                        <?php echo Form::hidden('info_name', $input['info_name']); ?>
                                    </tr>
                                    <tr>
                                        <td class="label_item"><label class="control-label">メールアドレス</label></td>
                                        <td class="form_contents"><div class="col-sm-10"><?php echo $input['info_mailaddress'] ?></div></td>
                                        <?php echo Form::hidden('info_mailaddress', $input['info_mailaddress']); ?>
                                    </tr>
                                    <tr>
                                        <td class="label_item"><label class="control-label">お問い合わせ項目</label></td>
                                        <td class="form_contents"><div class="col-sm-10"><?php echo $input['info_content'] ?></div></td>
                                        <?php echo Form::hidden('info_content', $input['info_content']); ?>
                                    </tr>
                                    <tr>
                                        <td class="label_item"><label class="control-label">内容</label></td>
                                        <td class="form_contents"><div class="col-sm-10"><?php echo nl2br($input['info_text'], false) ?></div></td>
                                        <?php echo Form::hidden('info_text', $input['info_text']); ?>
                                    </tr>
                                </tbody>
                                <?php echo Form::csrf(); ?>
                            </table>
                            <div class="btn_send">
                                <button type="submit" name="btn_send" class="btn btn-primary" >送信</button>
                                <button type="submit" name="btn_revision" class="btn btn-primary" >修正</button>
                            </div>
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

