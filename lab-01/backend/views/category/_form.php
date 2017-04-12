<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use common\models\Category;


/* @var $this yii\web\View */
/* @var $model common\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-form">

    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>
        </div>
        <div class="panel-body">
            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>


            <?php
                $cat = new Category;
            ?>
            <?= $form->field($model, 'parent')->dropDownList(
                $cat -> getParent(),

                [
                    'prompt'=>'Danh mục cha'
                ]
            ) ?>

            <?= $form->field($model, 'status')->dropDownList(
                    [
                        1=>'Kích hoạt',
                        0=>'Không kích hoạt'
                    ],
                    [
                        'prompt'=>'Chọn trạng thái'
                    ]
            ) ?>

            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>
