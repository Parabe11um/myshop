<?php
/**
 * Created by PhpStorm.
 * User: Capri
 * Date: 16.03.2018
 * Time: 0:53
 */

namespace app\models;
use yii\db\ActiveRecord;


class Product extends ActiveRecord {

    public static function tableName() {
        return 'product';
    }

    public function getCategory(){
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}