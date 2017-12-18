<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 02.12.2017
 * Time: 13:27
 */

namespace app\controllers;
use app\models\Product;
use app\models\Category;
use Yii;
use yii\data\Pagination;

class ProductController extends AppController
{
    public function actionIndex(){
        $query=Product::find();
        $pages=new Pagination(['totalCount'=>$query->count(),'pageSize'=>9,'forcePageParam'=>false,'pageSizeParam'=>false]);
        $products=$query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('all_product',compact('products','pages'));
    }
}