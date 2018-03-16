<?php
/**
 * Created by PhpStorm.
 * User: Capri
 * Date: 16.03.2018
 * Time: 1:07
 */

namespace app\components;
use yii\base\Widget;

class MenuWidget extends Widget {

    public $tpl;

    public function init() {
        parent::init();
        if( $this->tpl === null){
            $this->tpl = 'menu';
        }
        $this->tpl .= '.php';
    }

    public function run(){
        return $this->tpl;
    }

}