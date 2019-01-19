<?php
/**
 * Created by PhpStorm.
 * User: MiGame
 * Date: 19.01.2019
 * Time: 0:43
 */

namespace app\assets;

use yii\web\Controller;

class categoryController extends Controller
{
    public function actionIndex() {
        return $this->render('index');
    }
}