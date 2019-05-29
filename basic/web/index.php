<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>码农天下图书管理系统</title>
    <link rel="stylesheet" href="./assets//81904427/css/bootstrap.css">
</head>


<body style="overflow:-Scroll;overflow-y:hidden">

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
</body>
<style>
.login {
    width: 300px;
    height: 300px;
    background-color: rgba(red, green, blue, alpha);
    position: absolute;
    right: 100px;
    top: 30%;
    text-align: center;
}

.btns {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    margin: 0 50px;
}
</style>

<script src="./assets/81904427/js/bootstrap.js"></script>

</html>



