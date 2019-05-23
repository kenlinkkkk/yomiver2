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
    <button onclick="topFunction()" id="myBtn" class="button-BTT" title="Go to top"><i class="fas fa-angle-double-up"></i></button>

    <div id="particles-js" style="background-color: #040E57;z-index: -1;position: fixed;"></div>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-inner static-top">
        <div class="container">
            <a class="navbar-brand" href=<?=base_url()?>#">
                <img src="<?= base_url()?>/images/logo.png" alt="Yomi">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="color:#ffffff;"><i class="fas fa-grip-horizontal"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link white-text" href="<?=base_url()?>gioi-thieu">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link white-text" href="<?=base_url()?>huong-dan-dang-ky">Hướng dẫn</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link white-text" href="<?=base_url()?>lien-he">Liên hệ</a>
                    </li>
                    <li>
                        <a class="nav-link white-text" href="<?=base_url()?>dieu-le">Điều lệ</a>
                    </li>
                    <li class="nav-item disabled">
                        <p class="white-text item-padding"><span><i class="fas fa-phone-volume"></i></span> CSKH: (024) 7106 0808</p>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end navbar -->
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

    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("myBtn").style.display = "block";
            } else {
                document.getElementById("myBtn").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
</body>
</html>