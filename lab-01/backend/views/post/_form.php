<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Category;

/* @var $this yii\web\View */
/* @var $model common\models\Post */
/* @var $form yii\widgets\ActiveForm */
$cat = new Category;
?>

<div class="post-form">

    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>
        </div>
        <div class="panel-body">
            <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'cate')->dropDownList(
                $cat->getParent(    ),
                [
                    'prompt'=>'Chọn danh mục'
                ]
            ) ?>
            <div class="row">
                <div class="col-md-3">
                    <?= $form->field($model, 'image')->hiddenInput(['id'=>'image']) ?>
                    <img src="<?php echo $model->image;?>" id="show-img">
                    <a href="#" id="select-img" title="Chọn hình ảnh" class="btn btn-info btn-sm">Chọn ảnh</a>
                    <a href="#" id="remove-img" title="Xóa hình ảnh" class="btn btn-danger btn-sm">Xóa ảnh</a>
                </div>
                <div class="col-md-9">

                </div>
            </div>


            <?= $form->field($model, 'desc')->textarea(['id' => 'desc']) ?>

            <?= $form->field($model, 'content')->textarea(['id' => 'content']) ?>

            <?= $form->field($model, 'status')->dropDownList(
                [
                    1 => 'Kích hoạt',
                    0 => 'Không kích hoạt',
                ],
                [
                    'prompt'=> 'Chọn trạng thái'
                ]
            ) ?>

            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>
