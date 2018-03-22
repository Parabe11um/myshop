<?php

namespace app\controllers;
use app\models\Category;
use app\models\Product;
use Yii;
use yii\data\Pagination;

class CatalogController extends AppController {

    public function actionIndex(){
        $items = Product::find()->all();
        return $this->render('index', compact('items'));
    }

}