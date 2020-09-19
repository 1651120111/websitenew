<?php


namespace console\controllers;

use yii\console\Controller;

class RbacController extends Controller
{
    public function actionInit(){
        $auth = \Yii::$app->authManager;

        //create permission
        $createPost = $auth->createPermission('create-book');
        $createPost->description = 'create a book';
        //$auth->add($createPost);

        $updatePost = $auth->createPermission('update-book');
        $updatePost->description = 'update a book';
        //$auth->add($updatePost);

        $deletePost = $auth->createPermission('delete-book');
        $deletePost->description = 'delete a book';
        //$auth->add($deletePost);

        $viewPost = $auth->createPermission('view-book');
        $viewPost->description = 'view a book';
        //$auth->add($viewPost);

        $createCategory = $auth->createPermission('create-category');
        $createCategory->description = 'create a book';
        //$auth->add($createCategory);

        $deleteCategory = $auth->createPermission('delete-category');
        $deleteCategory->description = 'create a book';
        //$auth->add($deleteCategory);

        $viewCategory = $auth->createPermission('view-category');
        $viewCategory->description = 'view a book';
        //$auth->add($viewCategory);

        $updateCategory = $auth->createPermission('update-category');
        $updateCategory->description = 'update a book';
        //$auth->add($updateCategory);

        $categoryManager = $auth->createRole('manager-category');
        //$auth->add($categoryManager);

        // Tạo nhóm quyền
        $bookManager = $auth->createRole('manager-book');
        //$auth->add($bookManager);

        $admin = $auth->createRole('admin');
        //$auth->add($admin);

        // Gán quyền cho nhóm quyền
        //$auth->addChild($bookManager,$createPost);
        //$auth->addChild($bookManager,$updatePost);
        //$auth->addChild($bookManager,$deletePost);
        //$auth->addChild($bookManager,$viewPost);

        /*$auth->addChild($categoryManager,$createCategory);
        $auth->addChild($categoryManager,$updateCategory);
        $auth->addChild($categoryManager,$deleteCategory);
        $auth->addChild($categoryManager,$viewCategory);*/

        /*$auth->addChild($admin,$categoryManager);
        $auth->addChild($admin,$bookManager);*/

        $auth->assign($bookManager,5);
        $auth->assign($categoryManager,6);
        $auth->assign($admin,4);
    }
}