<?php
namespace frontend\widgets\MultiLang;
use yii\helpers\Html;
use Yii;
?>

<div id="lang" class="btn-group <?= $cssClass; ?>">
    <a class="btn dropdown-toggle" style="color: #9d9d9d" data-toggle="dropdown" href="#">
        <span class="uppercase"><?= Yii::$app->language; ?></span>
        <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
        <li class="item-lang">
            <?= Html::a('Go to English', array_merge(
                \Yii::$app->request->get(),
                [\Yii::$app->controller->route, 'language' => 'en']
            )); ?>
        </li>
        <li class="item-lang">
            <?= Html::a('Перейти на русский', array_merge(
                \Yii::$app->request->get(),
                [\Yii::$app->controller->route, 'language' => 'ru']
            )); ?>
        </li>
    </ul>
</div>