<!DOCTYPE>
<html>
<head>

 <meta http-equiv="content-type" content="text/html; 
 charset=UTF-8">
 <title>cadastro do cliente</title>
 
</head>

<body>
<h3>Sistema de cliente</h3>
<form action = "gravarphp.php" method="post">
nome..:
<br>
<input type="text" name = "nome"/>
<br><br>
email..:
<br>
<input type="text" name = "email"/>
<br><br>
idade..:
<br>
<input type="text" name = "idade"/>
<br><br>
estado civil..:
<br>
<select name ="estado">
<option value = "">Selecione --</option>
<option value = "Solteiro">Solteiro --</option>
<option value = "Casado">Casado --</option>
<option value = "Viuvo">Viuvo --</option>
<option value = "Divorciado">Divorciado --</option>
</select>
<br><input type="submit" value="cadastrar cliente">
<input type="reset" value="limpar campos">



</form>
</body>
</html>
