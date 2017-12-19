<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 02.12.2017
 * Time: 13:27
 */

namespace app\controllers;
use app\models\Brand;
use app\models\Product;
use app\models\Category;
use Yii;
use yii\data\Pagination;

class CatigoryController extends AppController
{

    public function actionIndex(){
        $hits=Product::find()->where(['hit'=>'1'])->all();
        $this->setMeta('E-SHOPPER');
        return $this->render('index',compact('hits'));
    }

    public function actionView(){
       $id=Yii::$app->request->get('id');
       $query=Product::find()->where(['idCategory'=>$id]);
       $pages=new Pagination(['totalCount'=>$query->count(),'pageSize'=>3,'forcePageParam'=>false,'pageSizeParam'=>false]);
       $products=$query->offset($pages->offset)->limit($pages->limit)->all();
       $category=Category::findOne($id);
       $this->setMeta('E-SHOPPER /'. $category->name,$category->keywords,$category->description);
       return $this->render('view',compact('products','category','pages'));
    }

    public function actionBrand(){
        $id=Yii::$app->request->get('id_brand');
        $query=Product::find()->where(['idBrand'=>$id]);
        $pages=new Pagination(['totalCount'=>$query->count(),'pageSize'=>4,'forcePageParam'=>false,'pageSizeParam'=>false]);
        $products=$query->offset($pages->offset)->limit($pages->limit)->all();
        $category=Brand::findOne($id);

        return $this->render('view',compact('products','category','pages'));
    }
}