<!DOCTYPE html>
<html lang="ru">
<head>
				<meta charset="UTF-8">
				<title>Заголовок страницы</title>
</head>
<body>
	<from action="mail.php" method="POST">
	  <selection name="title">
	    <option disabled selected>-</option>
	    <option value="1">Помощь и поддержка</option>
	    <option value="2">Trust & Saftey</option>
	    <option value="3">Сообщение о неисправностях</option>
	    <option value="4">Поддержка разработчиков</option>
	  </selection>
	  
	  <input type="email" name="email" placeholder="Введите адрес электронной почты" required>
	  
	  <textarea name="msg" placeholder="Введите сообщение службе поддержки" maxlength="2000" required>
	  </textarea>
	  
	  <input type="send" value="Отправить">
	</from>
	
</body>
</html>
