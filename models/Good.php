<?php
/**
 * Created by PhpStorm.
 * User: MiGame
 * Date: 19.01.2019
 * Time: 20:45
 */

namespace app\models;
use yii\db\ActiveRecord;
use Yii;

class Good extends ActiveRecord
{
    public static function tableName()
    {
        return 'good';
    }
    public function getAllGoods() {
        $goods = Yii::$app->cache->get('goods');
        if(!$goods) {
            $goods = Good::find()->asArray()->all();
            Yii::$app->cache->set('goods', $goods, 10);
        }
        return $goods;
    }
    public function getGoodCategories($id) {
        $catGoods = Yii::$app->cache->get('catGoods');
        if(!$catGoods) {
            $catGoods = Good::find()->WHERE(['category' => $id])->asArray()->all();
            Yii::$app->cache->set('catGoods', $catGoods, 10);
        }
        return $catGoods;
    }

    public function getSearchResults($search) {
        $searchResults = Good::find()->WHERE(['like','name', $search])->asArray()->all();
        return $searchResults;
    }
}