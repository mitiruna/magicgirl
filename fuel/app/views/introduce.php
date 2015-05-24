<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title->value ?></title>
        <?php use Fuel\Core; ?>
        <?php echo Asset::css('bootstrap.min.css'); ?>
        <?php echo Asset::css('magicgirl-bootstrap.css'); ?>
        <?php echo Asset::css('bootstrap-theme.min.css'); ?>
        <?php echo Asset::css('top-style.css'); ?>
    </head>
    <body id="top" class="main">
        <div class="main-contents">
            <div class="container">
                <?php echo $header ?>
                <?php echo $navbar ?>
                <div class="contents">
                    <div class="headline"><?php echo $news ?></div>
                    <table class="table table-striped">
                        <thead>
                            <th width="10%"></th>
                            <th width="20%"></th>
                            <th width="70%"></th>
                        </thead>
                        <tbody>
                            <tr>
                            </tr>

                        </tbody>
                    </table>
                    <hr>
                </div>
                
                <?php echo $footer ?>
            </div>

        </div>
        
        <!--<button type="button" class="btn btn-primary" value="ボタンだよ" >ボタンだよ</button>-->

    </body>
</html>