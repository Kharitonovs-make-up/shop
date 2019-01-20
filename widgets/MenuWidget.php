<?php
/**
 * Created by PhpStorm.
 * User: MiGame
 * Date: 19.01.2019
 * Time: 22:47
 */

namespace app\widgets;

use app\models\Category;
use yii\base\Widget;

class MenuWidget extends Widget
{
    public $date;
    public function run() {
        $this->date = new Category();
        $this->date = $this->date->getCategories();
        $this->date = $this->categoryToTemplate($this->date);
        return $this->date;
    }
    public function categoryToTemplate($date) {
        ob_start();
        include __DIR__.'/template/menu.php';
        return ob_get_clean();
    }
}