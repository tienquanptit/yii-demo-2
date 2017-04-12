<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bài viết';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="panel panel-primary">
        <div class="panel-heading">
            <h1 class="panel-title"><?= Html::encode($this->title) ?></h1>
        </div>
        <div class="panel-body">
            <p class="pull-right">
                <?= Html::a('Thêm mới', ['create'], ['class' => 'btn btn-success']) ?>
            </p>
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn',
                        'header'=>'STT',
                        'headerOptions'=>[
                            'style'=>'width:15px;text-align:center'
                        ],
                        'contentOptions'=>[
                            'style'=>'width:15px;text-align:center'
                        ],
                    ],

//            'id',
//            [
//                'attribute' => 'id',
//                'label'=>'ID',
//                'headerOptions'=>[
//                    'style'=>'width:15px;text-align:center'
//                ],
//                'contentOptions'=>[
//                    'style'=>'width:15px;text-align:center'
//                ],
//            ],
                    'name',
                    'cate',
                    'slug',
                    'image',
                    // 'desc',
                    // 'content:ntext',
                    // 'status',
                    // 'created_at',
                    [
                        'attribute'=>'created_at',
                        'content' =>function($model){
                            return date('d-m-Y',$model->created_at);
                        }
                    ],
                    // 'updated_at',

                    ['class' => 'yii\grid\ActionColumn',
                        'buttons'=>[
                            'view' => function($url,$model){
                                return Html::a('View',$url,['class'=> 'btn btn-xs btn-primary']);
                            },
                            'update'=> function($url,$model){
                                return Html::a('Edit',$url,['class'=> 'btn btn-xs btn-success']);
                            },
                            'delete'=> function($url,$model){
                                return Html::a('<span class="glyphicon glyphicon-remove"></span>Delete',$url,
                                    [
                                        'class'=> 'btn btn-xs btn-danger',
                                        'data-confirm' => 'Ban co chac chan muon xoa '.$model->name,
                                        'data-method' =>'post',
                                    ]);
                            },
                        ]
                    ],
                ],
            ]); ?>
        </div>
    </div>




</div>
