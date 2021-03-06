<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-content">


    <div class="fullwidth-block">
        <div class="container">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3023.1093732611434!2d-73.99664419999999!3d40.7376188!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259bd6429cbad%3A0xabf8edfb01e21691!2s534+Avenue+of+the+Americas%2C+New+York%2C+NY+10011%2C+Amerika+Serikat!5e0!3m2!1sid!2sid!4v1410801748284" width="600" height="450" frameborder="0" style="border:0"></iframe>
            </div>
        </div>
    </div>

    <div class="fullwidth-block">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h1 class="wow fadeInLeft">Addresss</h1>
                    <address class="wow fadeInLeft">
                        <p>Company Name</p>
                        <p>4235 Poplar Street,  Compton, CA 90220</p>
                        <p>Phone: +1 932 349 313 <br>info@companyname.com</p>
                    </address>
                </div>
                <div class="col-md-9">
                    <h1 class="wow fadeInRight">Contact Form</h1>
                    <form action="#">
                        <div class="row">
                            <div class="col-md-4">
                                <p class="wow fadeInRight"><input type="text" placeholder="Your name..."></p>
                                <p class="wow fadeInRight"><input type="text" placeholder="Company Name..."></p>
                                <p class="wow fadeInRight"><input type="email" placeholder="Email..."></p>
                            </div>
                            <div class="col-md-8">
                                <p class="wow fadeInRight"><textarea name="" id=""></textarea></p>
                                <input type="submit" class="button pull-right wow fadeInRight" value="Send Messages">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div> <!-- .inner-content -->
