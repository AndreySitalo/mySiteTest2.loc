<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 02.12.2017
 * Time: 13:27
 */

namespace app\controllers;
use yii\web\Controller;

class AppController extends Controller
{
     protected function setMeta($title=null,$keyWords=null,$description=null){
         $this->view->title=$title;
         $this->view->registerMetaTag(['name'=>'keywords','content'=>$keyWords]);
         $this->view->registerMetaTag(['name'=>'description','content'=>$description]);
     }

}