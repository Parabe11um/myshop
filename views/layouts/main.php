<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);

?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="/images/icons/favicon.png"/>
    <!--===============================================================================================-->
  </head>
<body class="animsition">
<?php $this->beginBody() ?>
<!-- Header -->
<header class="header1" >
    <!-- Header desktop -->
    <div class="container-menu-header">

        <div class="wrap_header">
            <!-- Logo -->
            <a href="index.html" class="logo">
                <img src="/images/icons/logo.png" alt="IMG-LOGO">
            </a>

            <!-- Menu -->
            <div class="wrap_menu">
                <nav class="menu">
                    <ul class="main_menu">
                        <li>
                            <a href="index.html">Главная</a>
                        </li>

                        <li>
                            <a href="product.html">Каталог</a>
                            <ul class="sub_menu">
                                <li><a href="index.html">Категория_1</a></li>
                                <li><a href="home-02.html">Категория_2</a></li>
                                <li><a href="home-03.html">Категория_3</a></li>
                            </ul>
                        </li>

                        <li class="sale-noti">
                            <a href="product.html">Распродажа</a>
                        </li>

                        <li>
                            <a href="cart.html">Новинки</a>
                        </li>

                        <li>
                            <a href="about.html">О нас</a>
                        </li>

                        <li>
                            <a href="contact.html">Контакты</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- Header Icon -->
            <div class="header-icons">
                <a href="#" class="header-wrapicon1 dis-block">
                    <img src="/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
                </a>

                <span class="linedivide1"></span>

                <div class="header-wrapicon2">
                    <img src="/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                    <span class="header-icons-noti">0</span>

                    <!-- Header cart noti -->
                    <div class="header-cart header-dropdown">
                        <ul class="header-cart-wrapitem">
                            <li class="header-cart-item">
                                <div class="header-cart-item-img">
                                    <img src="/images/item-cart-01.jpg" alt="IMG">
                                </div>

                                <div class="header-cart-item-txt">
                                    <a href="#" class="header-cart-item-name">
                                        White Shirt With Pleat Detail Back
                                    </a>

                                    <span class="header-cart-item-info">
											1 x $19.00
										</span>
                                </div>
                            </li>

                            <li class="header-cart-item">
                                <div class="header-cart-item-img">
                                    <img src="/images/item-cart-02.jpg" alt="IMG">
                                </div>

                                <div class="header-cart-item-txt">
                                    <a href="#" class="header-cart-item-name">
                                        Converse All Star Hi Black Canvas
                                    </a>

                                    <span class="header-cart-item-info">
											1 x $39.00
										</span>
                                </div>
                            </li>

                            <li class="header-cart-item">
                                <div class="header-cart-item-img">
                                    <img src="/images/item-cart-03.jpg" alt="IMG">
                                </div>

                                <div class="header-cart-item-txt">
                                    <a href="#" class="header-cart-item-name">
                                        Nixon Porter Leather Watch In Tan
                                    </a>

                                    <span class="header-cart-item-info">
											1 x $17.00
										</span>
                                </div>
                            </li>
                        </ul>

                        <div class="header-cart-total">
                            Total: $75.00
                        </div>

                        <div class="header-cart-buttons">
                            <div class="header-cart-wrapbtn">
                                <!-- Button -->
                                <a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                    View Cart
                                </a>
                            </div>

                            <div class="header-cart-wrapbtn">
                                <!-- Button -->
                                <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                    Check Out
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap_header_mobile">
        <!-- Logo moblie -->
        <a href="index.html" class="logo-mobile">
            <img src="/images/icons/logo.png" alt="IMG-LOGO">
        </a>

        <!-- Button show menu -->
        <div class="btn-show-menu">
            <!-- Header Icon mobile -->
            <div class="header-icons-mobile">
                <a href="#" class="header-wrapicon1 dis-block">
                    <img src="/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
                </a>

                <span class="linedivide2"></span>

                <div class="header-wrapicon2">
                    <img src="/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                    <span class="header-icons-noti">0</span>

                    <!-- Header cart noti -->
                    <div class="header-cart header-dropdown">
                        <ul class="header-cart-wrapitem">
                            <li class="header-cart-item">
                                <div class="header-cart-item-img">
                                    <img src="/images/item-cart-01.jpg" alt="IMG">
                                </div>

                                <div class="header-cart-item-txt">
                                    <a href="#" class="header-cart-item-name">
                                        White Shirt With Pleat Detail Back
                                    </a>

                                    <span class="header-cart-item-info">
											1 x $19.00
										</span>
                                </div>
                            </li>

                            <li class="header-cart-item">
                                <div class="header-cart-item-img">
                                    <img src="/images/item-cart-02.jpg" alt="IMG">
                                </div>

                                <div class="header-cart-item-txt">
                                    <a href="#" class="header-cart-item-name">
                                        Converse All Star Hi Black Canvas
                                    </a>

                                    <span class="header-cart-item-info">
											1 x $39.00
										</span>
                                </div>
                            </li>

                            <li class="header-cart-item">
                                <div class="header-cart-item-img">
                                    <img src="/images/item-cart-03.jpg" alt="IMG">
                                </div>

                                <div class="header-cart-item-txt">
                                    <a href="#" class="header-cart-item-name">
                                        Nixon Porter Leather Watch In Tan
                                    </a>

                                    <span class="header-cart-item-info">
											1 x $17.00
										</span>
                                </div>
                            </li>
                        </ul>

                        <div class="header-cart-total">
                            Total: $75.00
                        </div>

                        <div class="header-cart-buttons">
                            <div class="header-cart-wrapbtn">
                                <!-- Button -->
                                <a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                    View Cart
                                </a>
                            </div>

                            <div class="header-cart-wrapbtn">
                                <!-- Button -->
                                <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                    Check Out
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
            </div>
        </div>
    </div>

    <!-- Menu Mobile -->
    <div class="wrap-side-menu" >
        <nav class="side-menu">
            <ul class="main-menu">
                <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							Free shipping for standard order over $100
						</span>
                </li>

                <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                    <div class="topbar-child2-mobile">
							<span class="topbar-email">
								fashe@example.com
							</span>

                        <div class="topbar-language rs1-select2">
                            <select class="selection-1" name="time">
                                <option>USD</option>
                                <option>EUR</option>
                            </select>
                        </div>
                    </div>
                </li>

                <li class="item-topbar-mobile p-l-10">
                    <div class="topbar-social-mobile">
                        <a href="#" class="topbar-social-item fa fa-facebook"></a>
                        <a href="#" class="topbar-social-item fa fa-instagram"></a>
                        <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
                        <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
                        <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
                    </div>
                </li>

                <li class="item-menu-mobile">
                    <a href="index.html">Home</a>
                    <ul class="sub-menu">
                        <li><a href="index.html">Homepage V1</a></li>
                        <li><a href="home-02.html">Homepage V2</a></li>
                        <li><a href="home-03.html">Homepage V3</a></li>
                    </ul>
                    <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
                </li>

                <li class="item-menu-mobile">
                    <a href="product.html">Shop</a>
                </li>

                <li class="item-menu-mobile">
                    <a href="product.html">Sale</a>
                </li>

                <li class="item-menu-mobile">
                    <a href="cart.html">Features</a>
                </li>

                <li class="item-menu-mobile">
                    <a href="blog.html">Blog</a>
                </li>

                <li class="item-menu-mobile">
                    <a href="about.html">About</a>
                </li>

                <li class="item-menu-mobile">
                    <a href="contact.html">Contact</a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<!-- Slide1 -->
<section class="slide1">
    <div class="wrap-slick1">
        <div class="slick1">
            <div class="item-slick1 item1-slick1" style="background-image: url('/images/master-slide-02.jpg');">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
							Women Collection 2018
						</span>

                    <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
                        New arrivals
                    </h2>

                    <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
                        <!-- Button -->
                        <a href="product.html" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                            Shop Now
                        </a>
                    </div>
                </div>
            </div>

            <div class="item-slick1 item2-slick1" style="background-image: url('/images/master-slide-03.jpg');">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rollIn">
							Women Collection 2018
						</span>

                    <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">
                        New arrivals
                    </h2>

                    <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">
                        <!-- Button -->
                        <a href="product.html" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                            Shop Now
                        </a>
                    </div>
                </div>
            </div>

            <div class="item-slick1 item3-slick1" style="background-image: url('/images/master-slide-04.jpg');">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rotateInDownLeft">
							Women Collection 2018
						</span>

                    <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="rotateInUpRight">
                        New arrivals
                    </h2>

                    <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">
                        <!-- Button -->
                        <a href="product.html" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                            Shop Now
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?= $content; ?>

<!-- Footer -->
<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
    <div class="flex-w p-b-90">
        <div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
            <h4 class="s-text12 p-b-30">
                GET IN TOUCH
            </h4>

            <div>
                <p class="s-text7 w-size27">
                    Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
                </p>

                <div class="flex-m p-t-30">
                    <a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
                    <a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
                    <a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
                    <a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
                    <a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
                </div>
            </div>
        </div>

        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
            <h4 class="s-text12 p-b-30">
                Categories
            </h4>

            <ul>
                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Men
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Women
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Dresses
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Sunglasses
                    </a>
                </li>
            </ul>
        </div>

        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
            <h4 class="s-text12 p-b-30">
                Links
            </h4>

            <ul>
                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Search
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        About Us
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Contact Us
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Returns
                    </a>
                </li>
            </ul>
        </div>

        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
            <h4 class="s-text12 p-b-30">
                Help
            </h4>

            <ul>
                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Track Order
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Returns
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Shipping
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        FAQs
                    </a>
                </li>
            </ul>
        </div>

        <div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
            <h4 class="s-text12 p-b-30">
                Newsletter
            </h4>

            <form>
                <div class="effect1 w-size9">
                    <input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
                    <span class="effect1-line"></span>
                </div>

                <div class="w-size2 p-t-20">
                    <!-- Button -->
                    <button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                        Subscribe
                    </button>
                </div>

            </form>
        </div>
    </div>

    <div class="t-center p-l-15 p-r-15">
        <a href="#">
            <img class="h-size2" src="/images/icons/paypal.png" alt="IMG-PAYPAL">
        </a>

        <a href="#">
            <img class="h-size2" src="/images/icons/visa.png" alt="IMG-VISA">
        </a>

        <a href="#">
            <img class="h-size2" src="/images/icons/mastercard.png" alt="IMG-MASTERCARD">
        </a>

        <a href="#">
            <img class="h-size2" src="/images/icons/express.png" alt="IMG-EXPRESS">
        </a>

        <a href="#">
            <img class="h-size2" src="/images/icons/discover.png" alt="IMG-DISCOVER">
        </a>

        <div class="t-center s-text8 p-t-20">
            Copyright © 2018 All rights reserved. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
        </div>
    </div>
</footer>

<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
</div>

<!-- Container Selection1 -->
<div id="dropDownSelect1"></div>

<!--===============================================================================================-->

<?php $this->endBody() ?>
<script type="text/javascript">
    $('.block2-btn-addcart').each(function(){
        var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
        $(this).on('click', function(){
            swal(nameProduct, "is added to cart !", "success");
        });
    });

    $('.block2-btn-addwishlist').each(function(){
        var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
        $(this).on('click', function(){
            swal(nameProduct, "is added to wishlist !", "success");
        });
    });
</script>
</body>
</html>
<?php $this->endPage() ?>
