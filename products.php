<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!-- Meta -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1" />

        <?php include "temp/head.php" ?>

    </head>
    <body>
        
        <?php include "temp/header.php" ?>

        <!-- Page Header Start -->
        <div class="page-header parallaxie">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <!-- Page Header Box Start -->
                        <div class="page-header-box">
                            <h1 class="text-anime-style-2" data-cursor="-opaque"><span><?= $_GET['data'] ?></span></h1>
                            <nav class="wow fadeInUp">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?= $_GET['data'] ?></li>
                                </ol>
                            </nav>
                        </div>
                        <!-- Page Header Box End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Photo Gallery Section Start -->
        <div class="page-gallery">
            <div class="container">
                <!-- gallery section start -->
                <div class="row gallery-items page-gallery-box">
                    <?php
                        switch ($_GET['data']) {
                            case 'CNC':
                                include "temp/CNC.php";
                                break;
                            case 'HMC':
                                include "temp/HMC.php";
                                break;
                            case 'VMC':
                                include "temp/VMC.php";
                                break;
                            case 'VTL':
                                include "temp/VTL.php";
                                break;
                            default:
                                echo "Product Not Found";
                        }
                    ?>
                </div>
                <!-- gallery section end -->
            </div>
        </div>
        <!-- Photo Gallery Section End -->

        <?php include "temp/footer.php" ?>

    </body>

</html>