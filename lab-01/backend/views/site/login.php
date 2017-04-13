<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
            <?php $form = ActiveForm::begin(); ?>

                <?php echo $form->field($model, 'username')->textInput(['id' => 'username', 'class' => 'login-ic'])->label(false) ?>

                <?php echo $form->field($model, 'password')->passwordInput(['id'=> 'password', 'class' => 'login-ic'])->label(false) ?>

                <?php echo $form->field($model, 'rememberMe')->checkbox() ?>

            <div class="log-bwn">
                <input type="submit"  value="Log in" >
            </div>

            <?php ActiveForm::end(); ?>


<!--<div class="login-form">-->
<!--    <div class="top-login">-->
<!--        <span><img src="../../../uploads/group.png" alt=""/></span>-->
<!--    </div>-->
<!--    <h1>Login</h1>-->
<!--    <div class="login-top">-->
<!--        <form>-->
<!--            <div class="login-ic">-->
<!--                <i ></i>-->
<!--                <input type="text"  value="User name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User name';}"/>-->
<!--                <div class="clear"> </div>-->
<!--            </div>-->
<!--            <div class="login-ic">-->
<!--                <i class="icon"></i>-->
<!--                <input type="password"  value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}"/>-->
<!--                <div class="clear"> </div>-->
<!--            </div>-->
<!---->
<!--            <div class="log-bwn">-->
<!--                <input type="submit"  value="Login" >-->
<!--            </div>-->
<!--        </form>-->
<!--    </div>-->
<!--    <p class="copy">© 2016 Square Login Form. All rights reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>-->
<!--</div>-->