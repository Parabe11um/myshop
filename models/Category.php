<?php
/**
 * Created by PhpStorm.
 * User: Capri
 * Date: 16.03.2018
 * Time: 0:53
 */

namespace app\models;
use yii\db\ActiveRecord;


class Category extends ActiveRecord {

    public static function tableName() {
        return 'category';
    }

    public function getProducts(){
        return $this->hasMany(Product::className(), ['category_id' => 'id']);
    }

}