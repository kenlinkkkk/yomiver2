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

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<!--        custom css-->
    <link rel="stylesheet" href="<?= base_url()?>/css/custom.css">

<!--    backdround-->
    <script src="<?= base_url()?>/js/app.js"></script>
    <script src="<?= base_url()?>/js/particles.min.js"></script>

<!--    font awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
</head>

<body>
    <div id="particles-js">
        <?= $main; ?>
    </div>
</body>
</html>