<?php
/**
 * Created by PhpStorm.
 * User: MiGame
 * Date: 19.01.2019
 * Time: 22:49
 */

namespace app\models;


use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
    public static function tableName()
    {
        return 'category';
    }
    public function getCategories() {
        return Category::find()->asArray()->all();
    }

}