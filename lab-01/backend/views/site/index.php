<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use common\models\Post;
$this->title = 'My Yii Application';
?>
<!-- Main Content -->

<?php $posts = \common\models\Post::find()->all();
//    var_dump($posts);
?>


<?php if($posts) : ?>
<div class="container" style="padding-top: 30px;">
    <div class="row">
        <div class="">
            <?php foreach ($posts as $item) : ?>
                <div class="post-preview">

                    <?php echo Html::a($item->name,['/post/view-post','slug'=>$item->slug], ['class'=>'post-title']);?>

                    <!--                <a href="post.html">-->
                    <!--                    <h2 class="post-title">-->
                    <!--                        --><?php //echo $item->name; ?>
                    <!--                    </h2>-->
                    <h3 class="post-subtitle">
                        <?php echo $item->desc; ?>
                    </h3>
                    <!--                </a>-->
                    <p class="post-meta">Posted by <a href="https://www.facebook.com/quannntien">Quan Tien</a> <?php echo ' on '.date('d-m-Y',$item->created_at);?> </p>
                </div>
                <hr>
            <?php endforeach; ?>

            <?php endif; ?>

            <!-- Pager -->
            <ul class="pager">
                <li class="next">
                    <a href="#">Older Posts &rarr;</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<hr>
