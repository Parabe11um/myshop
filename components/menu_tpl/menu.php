<?php
use yii\helpers\Html;
?>

<div class="col-sm-10 col-md-8 col-lg-3">
    <div class="hov-img-zoom pos-relative m-b-30">
        <?= Html::img("@web/images/category/{$category['image']}", ['alt' => $category->name])?>
        <div class="block1-wrapbtn w-size2">
            <!-- Button -->
            <a href="<?= \yii\helpers\Url::to(['category/view', 'id' => $category['id']] )?>" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                <?= $category['name']?>
            </a>
        </div>
    </div>
</div>
