<?php
    session_start();
?>

<html>
    <head><title>ログインしてください</title></head>
    <body>
        <form action="31-021.php" method="POST">
            ユーザー名:<input type="text" name="ID"><br>
            パスワード:<input type="password" name="PWD"><br>
            <input type="submit" value="ログイン">
        </form>
    </body>
</html>