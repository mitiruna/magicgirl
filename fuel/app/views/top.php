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
                <?php include('common/header.php'); ?>
                <?php include('common/navbar.php'); ?>
                <div class="contents">
                    <div class="headline"><?php echo $news ?></div>
                    <table class="table table-striped">
                        <thead>
                            <th width="10%"></th>
                            <th width="20%"></th>
                            <th width="70%"></th>
                        </thead>
                        <tbody>
                            <?php foreach ((array)$news_list as $row): ?>
                            <tr>
                                <td><?php echo $row->get_title() ?></td>
                                <td><?php echo Date::forge($row->get_created_at())->format('%Y/%m/%d') ?></td>
                                <td><a href="<?php echo $row->get_link() ?>"><?php echo nl2br($row->get_content()) ?></a></td>
                            </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                    <hr>
                </div>
                <?php include('common/footer.php'); ?>
            </div>

        </div>
        <!--<button type="button" class="btn btn-primary" value="ボタンだよ" >ボタンだよ</button>-->

    </body>
</html>
