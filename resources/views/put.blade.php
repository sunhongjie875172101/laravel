<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>这是一个PUT提交页面</title>
</head>
<body>
    <form action="/insert" method="post">
        用户名：<input type="text" name="username"><br>
        密码：<input type="password" name="password"><br>
        <input type="submit" value="提交">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="PUT">
    </form>
</body>
</html>
