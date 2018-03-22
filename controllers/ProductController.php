<?php
/**
 * Created by PhpStorm.
 * User: Capri
 * Date: 20.03.2018
 * Time: 0:10
 */

namespace app\controllers;
use app\models\Category;
use app\models\Product;
use Yii;

class ProductController extends AppController {
    public function actionView($id){
        $id = Yii::$app->request->get('id');
        $product = Product::findOne($id);
        if(empty($product)){
            throw new \yii\web\HttpException('404', 'Такого товара пока еще нет :(');
        }

//        $product = Product::find()->with('category')->where(['id' => $id])->limit(1)->one();
        return $this->render('view', compact('product'));
    }
}