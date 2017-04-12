<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap bg-info">
    <?php
    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-static-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 aside-left bg-info">
                <div class="panel panel-primary">
                    <div class="panel-body">

                        <?php
                            $route = Yii::$app->controller->route;

                            $control = Yii::$app->controller->id;
                        ?>

                        <div class="list-group" id="'manager-menu">
                            <?php echo Html::a('<i class="glyphicon glyphicon-chevron-right pull-right"></i>
                            Trang chủ',['/site'],['class'=> ($control =='site') ? 'list-group-item active' : 'list-group-item']);?>

                            <?php echo Html::a('<i class="glyphicon glyphicon-chevron-right pull-right"></i>
                            Quản lý danh mục',['/category'],['class'=> ($control =='category') ? 'list-group-item active' : 'list-group-item']);?>

                            <?php echo Html::a('<i class="glyphicon glyphicon-chevron-right pull-right"></i>
                            Quản lý sách',['/book'],['class'=> ($control =='book') ? 'list-group-item active' : 'list-group-item']);?>

                            <?php echo Html::a('<i class="glyphicon glyphicon-chevron-right pull-right"></i>
                            Quản lý bài viết',['/post'],['class'=> ($control =='post') ? 'list-group-item active' : 'list-group-item']);?>

                            <?php echo Html::a('<i class="glyphicon glyphicon-chevron-right pull-right"></i>
                            Quản lý ảnh',['/file'],['class'=> ($control =='file') ? 'list-group-item active' : 'list-group-item']);?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10 admin-right">
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
