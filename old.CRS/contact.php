<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        <?php include "temp/head.php" ?>

    </head>

    <body class="custom-cursor">
        <div class="custom-cursor__cursor"></div>
        <div class="custom-cursor__cursor-two"></div>

        <!-- preloader -->
        <!-- <div class="loader-wrap">
            <div class="preloader">
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="E" class="letters-loading">
                                E
                            </span>
                            <span data-text-preloader="L" class="letters-loading">
                                L
                            </span>
                            <span data-text-preloader="I" class="letters-loading">
                                I
                            </span>
                            <span data-text-preloader="E" class="letters-loading">
                                E
                            </span>
                            <span data-text-preloader="C" class="letters-loading">
                                C
                            </span>
                            <span data-text-preloader="O" class="letters-loading">
                                O
                            </span>
                            <span data-text-preloader="N" class="letters-loading">
                                N
                            </span>
                            <span data-text-preloader="S" class="letters-loading">
                                S
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- preloader end -->

        <div class="page-wrapper">
            <?php include "temp/header.php" ?>

            <!--Page Header Start-->
            <section class="page-header">
                <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);"></div>
                <div class="container">
                    <div class="page-header__inner">
                        <h2>Contact Us</h2>
                        <div class="thm-breadcrumb__box">
                            <ul class="thm-breadcrumb list-unstyled">
                                <li><a href="index.php">Home</a></li>
                                <li><span class="icon-angle-left"></span></li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!--Page Header End-->

            <!--Contact Page Start-->
            <section class="contact-page">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="contact-page__left">
                                <div class="contact-page__img">
                                    <img src="assets/images/resources/contact-page-img-1.jpg" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="contact-page__right">
                                <h3 class="contact-page__title">Let us know about your next idea</h3>
                                <ul class="contact-page__contact-list list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-location"></span>
                                        </div>
                                        <div class="content">
                                            <h3>Location</h3>
                                            <p>
                                                <a href="https://maps.app.goo.gl/Xikh6JHrSTZA9KyAA">Unnamed Road, Rathinagiri Nagar, Villankurichi, Coimbatore, Tamil Nadu 641035</a>
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-call"></span>
                                        </div>
                                        <div class="content">
                                            <h3>Phone number</h3>
                                            <p><a href="tel:9840859897">+91 9840859897</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-email"></span>
                                        </div>
                                        <div class="content">
                                            <h3>Email</h3>
                                            <p><a href="mailto:automationcrs@gmail.com">automationcrs@gmail.com</a></p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="contact-page__social">
                                    <a href="#"><i class="icon-facebook"></i></a>
                                    <a href="#"><i class="icon-instagram"></i></a>
                                    <a href="https://wa.me/9840859897"><i class="fab fa-whatsapp"></i></a>
                                    <a href="#"><i class="icon-Frame"></i></a>
                                    <a href="#"><i class="icon-link-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Contact Page End-->

            <!--Google Map Start-->
            <section class="google-map-one">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6584.866159037737!2d77.01621962754008!3d11.084668796670432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba8f9ea568d7771%3A0x1089ced16c22a44c!2sCRS%20AUTOMATION!5e0!3m2!1sen!2sin!4v1744457837940!5m2!1sen!2sin" class="google-map__one" allowfullscreen></iframe>
            </section>
            <!--Google Map End-->

            <!--Contact Three Start-->
            <section class="contact-three">
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center sec-title-animation animation-style1">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">Get in touch</span>
                            </div>
                            <h2 class="section-title__title title-animation">Send us a message</h2>
                        </div>
                        <form action="./" class="contact-three__form contact-form-validated" novalidate="novalidate">
                            <div class="row">
                                <div class="col-xl-3 col-lg-6">
                                    <div class="contact-three__input-box">
                                        <input type="text" placeholder="Your Name" name="name" />
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6">
                                    <div class="contact-three__input-box">
                                        <input type="email" placeholder="Your Email" name="email" />
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6">
                                    <div class="contact-three__input-box">
                                        <input type="text" placeholder="Phone Number" name="Phone" />
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6">
                                    <div class="contact-three__input-box">
                                        <input type="text" placeholder="Your Subject" name="Subject" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12 col-lg-12">
                                    <div class="contact-three__input-box text-message-box">
                                        <textarea name="message" placeholder="Write your Message"></textarea>
                                    </div>
                                    <div class="contact-three__btn-box">
                                        <button type="submit" class="thm-btn contact-three__btn">Send message<span class="icon-dabble-arrow-right"></span></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="result"></div>
                    </div>
                </div>
            </section>
            <!--Contact Three End-->

            <?php include "temp/footer.php" ?>

        </div>
        <!-- /.page-wrapper -->

    </body>

</html>