<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\LoginAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

LoginAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo Html::csrfMetaTags() ?>
    <title><?php echo Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <?php
    $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
    $homeUrl = str_replace('/backend/web','', Yii::$app->urlManager->baseUrl);
    ?>
    <script lang="text/javascript">
        function homeUrl() {
            return '<?php echo $host.$homeUrl?>';
        }
        //        alert(homeUrl());
    </script>

</head>
<body>
<?php $this->beginBody() ?>
<div class="login-form">
    <div class="top-login">
        <span><img src="../../uploads/group.png" alt=""/></span>
    </div>
    <h1>Login Admin</h1>
    <div class="login-top">
            <?php echo Alert::widget() ?>
            <?php echo $content ?>
    </div>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
