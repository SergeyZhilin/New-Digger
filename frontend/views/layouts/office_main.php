<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

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
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <div class="profile_img">
                            <span class="prfil-img"><img src="/frontend/web/images/p1.png" alt=""> </span>
                            <div class="user-name">
                                <p>Malorum</p>
                                <span>Administrator</span>
                            </div>
                            <i class="fa fa-angle-down lnr"></i>
                            <i class="fa fa-angle-up lnr"></i>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                    <ul class="dropdown-menu drp-mnu">
                        <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
                        <li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li>
                        <li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
                    </ul>
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
        <div class="inner-block">

        </div>
    </div>
</div>

<!-- Sidebar-->
<div class="sidebar-menu">
    <div class="menu">
        <ul id="menu" >
            <li id="menu-home" ><a href="/office"><i class="fa fa-home"></i><span>Кабинет</span></a></li>
<!--            <li><a href="#"><i class="fa fa-cogs"></i><span>Components</span><span class="fa fa-angle-right" style="float: right"></span></a>-->
<!--                <ul>-->
<!--                    <li><a href="grids.html">Grids</a></li>-->
<!--                    <li><a href="portlet.html">Portlets</a></li>-->
<!--                </ul>-->
<!--            </li>-->
            <li id="menu-comunicacao"><a href="office/deposits"><i class="fa fa-book nav_icon"></i><span>Мои инвестиции</span></a></li>
<!--            <li><a href="maps.html"><i class="fa fa-map-marker"></i><span>Maps</span></a></li>-->
            <li id="menu-academico" ><a style="cursor: pointer"><i class="fa fa-file-text"></i><span>Операции</span><span class="fa fa-angle-right" style="float: right"></span></a>
                <ul id="menu-academico-sub" >
                    <li id="menu-academico-boletim" ><a href="office/payin">Пополнить баланс</a></li>
                    <li id="menu-academico-avaliacoes" ><a href="office/payout">Вывод средств</a></li>
                </ul>
            </li>

            <li><a href="office/history"><i class="fa fa-bar-chart"></i><span>История Операций</span></a></li>

            <li><a style="cursor: pointer"><i class="fa fa-cog"></i><span>Профиль</span><span class="fa fa-angle-right" style="float: right"></span></a>
                <ul id="menu-academico-sub" >
                    <li id="menu-academico-avaliacoes" ><a href="office/profile">Личные Данные</a></li>
                    <li id="menu-academico-boletim" ><a href="office/security">Безопасность</a></li>
                    <li id="menu-academico-boletim" ><a href="office/change_password">Изменить пароль</a></li>
                    <li id="menu-academico-boletim" ><a href="office/payments">Платёжные реквизиты</a></li>
                    <li id="menu-academico-boletim" ><a href="office/pin">PIN-Code</a></li>
                </ul>
            </li>
<!--            <li><a href="#"><i class="fa fa-shopping-cart"></i><span>E-Commerce</span><span class="fa fa-angle-right" style="float: right"></span></a>-->
<!--                <ul id="menu-academico-sub" >-->
<!--                    <li id="menu-academico-avaliacoes" ><a href="product.html">Product</a></li>-->
<!--                    <li id="menu-academico-boletim" ><a href="price.html">Price</a></li>-->
<!--                </ul>-->
<!--            </li>-->
        </ul>
    </div>
</div>
<div class="clearfix"> </div>
<!-- End Sidebar-->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>