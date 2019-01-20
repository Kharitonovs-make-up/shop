<?php
/**
 * Created by PhpStorm.
 * User: MiGame
 * Date: 19.01.2019
 * Time: 0:43
 */

namespace app\controllers;

use app\models\Good;
use yii\web\Controller;

class CategoryController extends Controller
{
    public function actionIndex() {
        $goods = new Good();
        $goods = $goods->getAllGoods();
        return $this->render('index', compact('goods'));
    }

    public function actionView($id) {
        $goods = new Good();
        $goods->getGoodCategories($id);
        return $this->render('view', compact('goods'));
    }
}