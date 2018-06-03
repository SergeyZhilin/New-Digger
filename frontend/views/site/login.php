<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<div class="login-background">
    <div class="login-form-block">
        <div class="registration">
            <span>
                <a href="/signup">Регистрация</a>
            </span>
        </div>
        <div class="login active">
            <span>
                <a>Авторизация</a>
            </span>
        </div>
        <div class="login-form">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

            <?= $form->field($model, 'username')->textInput(['placeholder' => 'Логин']) ?>

            <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Пароль']) ?>

            <div class="forgot-password">
                <?= Html::a('Забыли пароль?', ['/forgotpassword']) ?>.
            </div>

            <div class="form-group">
                <?= Html::submitButton('Войти', ['class' => 'login-button', 'name' => 'login-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>