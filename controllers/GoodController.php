<?php
/**
 * Created by PhpStorm.
 * User: MiGame
 * Date: 20.01.2019
 * Time: 14:10
 */

namespace app\controllers;

use yii\web\Controller;
use app\models\Good;

class GoodController extends Controller
{
    public function actionIndex($name) {
        $good = new Good();
        $good = $good->getOneGood($name);
        //$this->title = 'Ресторан';
        //$this->title = 'PHP Shop | ' . $good['name'];
        return $this->render('index', compact('good'));
    }
}