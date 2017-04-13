<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 4/13/2017
 * Time: 10:56 PM
 */
namespace frontend\controllers;
use yii\web\Controller;
use common\models\Post;

class PostController extends Controller{
    public function actionIndex(){
        #code...
    }

    public function actionView($slug){
        $model = Post::findOne(['slug'=>$slug]);
        return $this->render('view',['model'=>$model]);
    }
}