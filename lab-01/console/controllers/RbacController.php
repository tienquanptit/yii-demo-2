<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 4/12/2017
 * Time: 11:02 AM
 */
    namespace console\controllers;
    use Yii;
    use yii\console\Controller;

    class RbacController extends Controller{
        public function actionInit(){
            $auth = Yii::$app->authManager;

            //them perminssion
//            $createPost = $auth->createPermission('create-post');
//            $createPost->description = 'Creat a post';
//            $auth->add($createPost);

            $indexPost = $auth->createPermission('index-post');
            $indexPost->description = 'Xem danh sach bai viet';
            $auth->add($indexPost);

            $updatePost = $auth->createPermission('update-post');
            $updatePost->description = 'Chinh sua bai viet';
            $auth->add($updatePost);

            $viewPost = $auth->createPermission('view-post');
            $viewPost->description = 'Xem chi tiet bai viet';
            $auth->add($viewPost);

            $deletePost = $auth->createPermission('delete-post');
            $deletePost->description = 'Xoa bai viet';
            $auth->add($deletePost);
        }
    }
?>