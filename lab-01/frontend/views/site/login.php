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
