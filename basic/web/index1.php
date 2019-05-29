<?php

// $con = mysqli_connect("localhost","root","root");
// if (!$con)
//   {
//   die('Could not connect: ' . mysql_error());
//   }else {
//     mysqli_select_db($con,"db_book");
//     $username = $_REQUEST['username'];
//     $password = $_REQUEST['password'];
//     if($username == 'admin') {
//         echo '登陆成功!';
//     }
//   }





// defined('YII_DEBUG') or define('YII_DEBUG', true);
// defined('YII_ENV') or define('YII_ENV', 'dev');

// require __DIR__ . '/../vendor/autoload.php';
// require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

// $config = require __DIR__ . '/../config/web.php';

// (new yii\web\Application($config))->run();

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>码农天下图书管理系统</title>
    <link rel="stylesheet" href="./assets//81904427/css/bootstrap.css">
    <?php $this->head() ?>
</head>


<body style="overflow:-Scroll;overflow-y:hidden">
<?php $this->beginBody() ?>

    <div class="login">
        <h3 style="color: white;">码农天下图书管理系统</h3>
        <form action="index.php">
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">用户名：</span>
                <input type="text" id="username" name="username" class="form-control" placeholder="请输入用户名"
                    aria-describedby="basic-addon1">
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">密&nbsp;&nbsp;&nbsp;码：</span>
                <input type="text" id="password" name="password" class="form-control" placeholder="请输入密码"
                    aria-describedby="basic-addon1">
            </div>
            <br>
            <div class="btns">
                <button type="submit" class="btn btn-primary">注册</button>
                <button type="submit" class="btn btn-success">登陆</button>
            </div>
        </form>

    </div>
    <div class="bg" style="position: relative;z-index: -100;">
        <img src="./assets/images/book.jpg" style="width: 100%;" alt="">
    </div>
    <div class="container">

        <table class="table table-hover" style="display:none">
            <thead>
                <tr>
                    <th>码农天下图书管理系统</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>ID</td>
                    <td>书名</td>
                    <td>作者</td>
                    <td>简介</td>
                    <td>时间</td>
                </tr>
            </tbody>
        </table>

    </div>
    <?php $this->endBody() ?>
</body>


<script src="./assets/81904427/js/bootstrap.js"></script>

</html>
<?php $this->endPage() ?>


