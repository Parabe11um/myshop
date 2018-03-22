<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 08.05.2016
 * Time: 10:00
 */

namespace app\controllers;
use app\models\Category;
use app\models\Product;
use Yii;
use yii\data\Pagination;

class CategoryController extends AppController{

    public function actionIndex(){
        $hits = Product::find()->where(['hit' => '1'])->limit(6)->all();
        return $this->render('index', compact('hits'));
    }

    public function actionView($id){
        $id = Yii::$app->request->get('id');

        $category = Category::findOne($id);
        if(empty($category)){
            throw new \yii\web\HttpException('404', 'Такой категории пока еще нет :(');
        }

//        $products = Product::find()->where(['category_id' => $id])->all();
        $query = Product::find()->where(['category_id' => $id]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 9, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        $category = Category::findOne($id);
        return $this->render('view', compact('products', 'pages', 'category'));
    }

    public function actionSearch(){
        $q = trim(Yii::$app->request->get('q'));

        if(!$q){
            return $this->render('search');
        }

        $query = Product::find()->where(['like', 'name', $q ]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('search', compact('products', 'pages', 'q'));
    }

}