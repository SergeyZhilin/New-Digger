<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<div class="registration-background">
    <div class="registration-form-block">
        <div class="registration active">
            <span>
                <a>Регистрация</a>
            </span>
        </div>
        <div class="login">
            <span>
                <a href="/login">Авторизация</a>
            </span>
        </div>
        <div class="registration-form">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

            <?= $form->field($model, 'username')->textInput(['placeholder' => 'Логин']) ?>

            <?= $form->field($model, 'email')->textInput(['placeholder' => 'E-Mail']) ?>

            <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Пароль']) ?>

            <div class="form-group">
                <?= Html::submitButton('Зарегистрироваться', ['class' => 'signup-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>