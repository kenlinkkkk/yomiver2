<?
date_default_timezone_set("Asia/Bangkok");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $this->config->item('title'); ?></title>
    <meta property="og:title" content="<?= $this->config->item('title'); ?>"/>
    <meta property="og:url" content="<?= $this->config->item('og_url'); ?>"/>
    <meta property="og:image" content="<?= $this->config->item('og_image'); ?>"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    boostrap 4-->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<!--        custom css-->
    <link rel="stylesheet" href="<?= base_url()?>css/custom.css">

    <link rel="stylesheet" href="<?= base_url()?>css/style.css">

    <link rel="stylesheet" href="<?= base_url()?>css/button.css">
<!--    font awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
</head>

<body>
    <div id="particles-js" style="background-color: #040E57;z-index: -1;position: fixed;"></div>
    <div class="blank-80px"></div>
    <div class="set-opacity">
        <?= $main?>
    </div>
    <div class="blank-80px"></div>

    <div>
        <?= $promotion?>
    </div>

    <div class="blank-80px"></div>
    <div style="z-index: -1;">
        <?= $footer?>
    </div>
    <!--    backdround-->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="<?= base_url()?>/js/particles.min.js"></script>

    <script src="<?= base_url()?>/js/app.js"></script>


</body>
</html>