<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 4/13/2017
 * Time: 11:05 PM
 */
$this->title = ($model) ? $model->name : 'Not found';
?>

<div class="view-post">
    <?php
    if($model) : ?>


        <!-- Page Header -->
        <!-- Set your background image for this header on the line below. -->
        <br><hr>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1><?php echo $model->name;?>t</h1>
                        <p class="meta">Posted by <a href="https://www.facebook.com/quannntien">Quan Tien</a> <?php echo ' on '.date('d-m-Y',$model->created_at);?> </p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <!-- Post Content -->
        <article>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <?php echo $model->content;?>
                    </div>
                </div>
            </div>
        </article>

        <hr>


    <?php else: ?>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">$tiems;
            </button>
            <strong>Error 404!</strong> Không có thông tin bài viết...
        </div>

    <?php endif;?>
</div>
