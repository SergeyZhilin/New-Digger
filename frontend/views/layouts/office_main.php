<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<!-- Header-->
<div class="header-main">
    <div class="header-left">
        <div class="logo-name">
            <a href="/"> <h1>Your company</h1>
            </a>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="header-right">
        <!--notification menu end -->
        <div class="profile_details">
            <ul>
                <li class="dropdown profile_details_drop">
                    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <div class="profile_img">
                            <span class="prfil-img"><img class="border-radius" src="/frontend/web/images/no-image.png" alt="avatar"></span>
                            <div class="user-name">
                                <p><?php echo \Yii::$app->user->getIdentity()->username; ?></p>
                                <span>Administrator</span>
                            </div>
                        </div>
                    </a>
<!--                    <ul class="dropdown-menu drp-mnu">-->
<!--                        <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>-->
<!--                        <li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li>-->
<!--                        <li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>-->
<!--                    </ul>-->
                </li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="clearfix"> </div>
</div>
<!-- End Header-->
<div class="left-content">
    <div class="mother-grid-inner">
        <div class="inner-block office-block">
            <?= $content ?>
        </div>
    </div>
</div>

<!-- Sidebar-->
<div class="sidebar-menu">
    <div class="menu">
        <ul id="menu" >
            <li id="menu-home" ><a href="/office"><i class="fa fa-home"></i><span>Кабинет</span></a></li>

            <li id="menu-deposits"><a href="/office/deposits"><i class="fa fa-book nav_icon"></i><span>Мои инвестиции</span></a></li>

            <li id="menu-academico" ><a style="cursor: pointer"><i class="fa fa-file-text"></i><span>Операции</span><span class="fa fa-angle-right" style="float: right"></span></a>
                <ul id="menu-academico-sub" >
                    <li id="payin" ><a href="/office/payin">Пополнить баланс</a></li>
                    <li id="payouts" ><a href="/office/payout">Вывод средств</a></li>
                </ul>
            </li>

            <li><a href="/office/history"><i class="fa fa-bar-chart"></i><span>История Операций</span></a></li>

            <li><a style="cursor: pointer"><i class="fa fa-cog"></i><span>Профиль</span><span class="fa fa-angle-right" style="float: right"></span></a>
                <ul id="menu-academico-sub" >
                    <li id="profile" ><a href="/office/profile">Личный Кабинет</a></li>
                    <li id="security" ><a href="/office/security">Безопасность</a></li>
                    <li id="change_password" ><a href="/office/change_password">Изменить пароль</a></li>
                    <li id="payments" ><a href="/office/payments">Платёжные реквизиты</a></li>
                    <li id="pin" ><a href="/office/pin">PIN-Code</a></li>
                </ul>
            </li>
            <li><a href=""><i class="fa fa-sign-out"></i><span>Выход</span></a></li>
        </ul>
    </div>
</div>
<div class="clearfix"> </div>
<!-- End Sidebar-->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>