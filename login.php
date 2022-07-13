<form name="login_form" action="./login_db.php" method="POST">
      <div class="login_form_top">
        <h1>LOGIN</h1>
        <p>UserID、Passwordをご入力の上、「LOGIN」ボタンをクリックしてください。</p>
      </div>
      <div class="login_form_btm">
        <input type="id" name="user_name" placeholder="UserName">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="botton" value="LOGIN">
      </div>
    </form>

<style>
/* CSSコード */
body {
  background-color: #CAE5CD;
}

form {
  width: 400px;
  padding: 40px 10px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  background-color: #CAE5CD;
  text-align: center;
}

form h1,form p {
  color: black;
  font-weight: 500;
}

form p {
  font-size: 10px;
}

form input[type = "id"],form input[type = "password"] {
  border: 0;
  background: none;
  display: block;
  margin: 20px auto;
  border: 2px solid #ff69b4;
  padding: 15px 10px;
  width: 200px;
  outline: none;
  border-radius: 24px;
  transition: 0.25s;
  text-align: center;
}

form input[type = "id"]:focus,form input[type = "password"]:focus {
  width: 280px;
  background-color: #f0f8ff;
}

form input[type = "submit"]{
  border: 0;
  background: #f0f8ff;
  display: block;
  margin: 20px auto;
  border: 2px solid #f0f8ff;
  padding: 15px 10px;
  width: 200px;
  outline: none;
  color: black;
  border-radius: 25px;
  transition: 0.25s;
  text-align: center;
  cursor: pointer;
}

form input[type = "submit"]:hover {
  background-color: #ff69b4;
  border: 2px solid #ff69b4;
}

</style>