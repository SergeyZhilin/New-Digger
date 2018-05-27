<?php
use yii\helpers\Html;
?>
<div id="lang">
    <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="btn-lang" data-toggle="dropdown">
            <?= $current->name;?>
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
            <?php foreach ($langs as $lang):?>
                    <li role="presentation">
                        <?= Html::a($lang->name, '/'.$lang->url.Yii::$app->getRequest()->getLangUrl())?>
                    </li>
            <?php endforeach;?>
        </ul>
    </div>
</div>