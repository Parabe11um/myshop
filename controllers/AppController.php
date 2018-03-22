<?php

namespace app\controllers;
use yii\web\Controller;
use app\models\Category;

class AppController extends Controller {

    public function actionCatalog() {
        return $this->render('catalog');
    }
}

