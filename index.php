<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container" style="padding-right:30%; padding-left:30%;">
  <h3 align="center">Login</h3>
  <form action="Login.php" method="post">
    <div class="form-group">
      <label for="email">Usuario:</label>
      <input type="text" class="form-control" id="usuario" placeholder="Enter usuario" name="usuario">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="clave" placeholder="Enter password" name="clave">
    </div>
   <div align="right">
    <button type="submit" class="btn btn-primary">Entrar</button>
	</div>
  </form>
</div>

</body>
</html>
