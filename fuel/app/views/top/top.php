<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>魔法少女</title>
        <?php use Fuel\Core; ?>
        <?php echo Asset::css('bootstrap.min.css'); ?>
        <?php echo Asset::css('magicgirl-bootstrap.css'); ?>
        <?php echo Asset::css('bootstrap-theme.min.css'); ?>
    </head>
    <body id="top" class="main">
        <div class="main-contents">
            <div class="container">
                <div class="panel panel-default panel-heading">
                    <div class="panel-title">魔法少女のゲームサイト</div>
                </div>
                <?php echo $navbar ?>
                <div class="contents">
                    <div class="headline"><?php echo $news ?></div>
                    <ul>
                        <li>ここら辺に更新情報が入るよ</li>
                        <li>ここら辺に更新情報が入るよ</li>
                        <li>ここら辺に更新情報が入るよ</li>
                        <li>ここら辺に更新情報が入るよ</li>
                        <li>ここら辺に更新情報が入るよ</li>
                        <li>ここら辺に更新情報が入るよ</li>
                        <li>ここら辺に更新情報が入るよ</li>
                        <li>ここら辺に更新情報が入るよ</li>
                    </ul>
                </div>
                <?php echo $footer ?>
            </div>

        </div>
        <!--<button type="button" class="btn btn-primary" value="ボタンだよ" >ボタンだよ</button>-->

    </body>
</html>
