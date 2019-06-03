<?php
namespace app\controllers;
use Yii;
use yii\web\Controller;

class IndexController extends Controller
{
  public function actionIndex()
    {    
        die("Hello world!!");//访问http://localhost/ibrain/index.php?r=index/index 
        //return $this->render('index');// /view/Index/index.html
    }
    public function actionHello()
    {    
        die("Hello world!!!!!");//http://localhost/ibrain/index.php?r=index/hello ,index.php可以省略。
    }

}