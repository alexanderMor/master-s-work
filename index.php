<?php  header("Content-Type: text/html; charset=utf-8");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Авторизация</title>
        <link rel="stylesheet" href="../style/bootstrap.css">
        <script src="../js/jquery-1.11.2.min.js" type="text/javascript"></script>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="style/style_avtoriz.css">
        
</head>

<body>

    <form action="scripts/avtoriz.php" method="post" id="login">
    <h1>Авторизация</h1>
    <fieldset id="inputs">
        <input id="username" name="username" type="text" placeholder="Логин" autofocus required>   
        <input id="password" name="password" type="password" placeholder="Пароль" required>
    </fieldset>
    <fieldset id="actions">
        <input type="submit" id="submit" name="submit" value="ВОЙТИ">
        <button id="reg" type="button" class="btn btn-link" data-toggle="modal" data-target="#myModal">Регистрация</button>
    </fieldset>
</form>
    
        
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="10" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Регистрация</h4>
      </div>
      <div class="modal-body">
          <p>Для регистрации в системе необходимо отправить письмо на email <a href="mailto:admin@mail.ru">admin@mail.ru</a> администратора со следующей информацией:</p>
        <ul>
            <li>ФИО</li>
            <li>E-mail</li>
            <li>Скриптовые имена физических схем БД</li>
        </ul>
          <p>После отправки данного письма, администратор высылает на указанный e-mail логин и пароль для входа в систему.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>    
    
</body>
</html>
