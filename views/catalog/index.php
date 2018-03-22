    <?php

/* @var $this yii\web\View */
use yii\helpers\Html;
?>


    <!-- Title Page -->
    <section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(images/heading-pages-02.jpg);">
        <h2 class="l-text2 t-center">
            Women
        </h2>
        <p class="m-text13 t-center">
            New Arrivals Women Collection 2018
        </p>
    </section>


    <!-- Content page -->
    <section class="bgwhite p-t-55 p-b-65">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                    <div class="leftbar p-r-20 p-r-0-sm">
                        <div class="search-product pos-relative bo4 of-hidden">
                            <input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product" placeholder="Search Products...">

                            <button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
                                <i class="fs-12 fa fa-search" aria-hidden="true"></i>
                            </button>
                        </div>
                        <!--  -->
                        <h4 class="m-text14 p-b-20 p-t-20 p-l-20">
                            Категории
                        </h4>

                        <ul class="catalog category-products p-b-54">
                            <?= \app\components\MenuWidget::widget(['tpl' => 'select'])?>
                        </ul>


                    </div>
                </div>

                <div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
                    <!--  -->
                    <!-- Product -->
                    <div class="row">
                        <?php if(!empty($items)) : ?>


                        <?php foreach($items as $item): ?>
                            <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                        <?= Html::img("@web/images/products/{$item['img']}", ['alt' => $item->name])?>
                                        <div class="block2-overlay trans-0-4">
                                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                                <!-- Button -->
                                                <a href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $item->id]) ?>" data-id="<?= $item->id ?>" class="flex-c-m add-to-cart sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">В корзину</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block2-txt p-t-20">
                                        <a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $item->id]) ?>" class="block2-name dis-block s-text3 p-b-5">
                                            <?= $item->name ?></a>
                                        <span class="block2-price m-text6 p-r-5">$<?= $item->price ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>



                    <?php else :?>
                        <h2>Здесь товаров пока нет</h2>
                    <?php endif; ?>
                    </div>

                </div>
            </div>
        </div>
    </section>