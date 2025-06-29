<?php include 'php/update.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<form action="php/update.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Editar</h4><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
		   <div class="form-group">
		     <label for="login">login</label>
		     <input type="name" 
		           class="form-control" 
		           id="login" 
		           name="login" 
		           value="<?=$row['login'] ?>" >
		   </div>

		   <div class="form-group">
		     <label for="senha">password</label>
		     <input type="name" 
		           class="form-control" 
		           id="senha" 
		           name="senha" 
		           value="<?=$row['senha'] ?>" >
		   </div>
		   <input type="text" 
		          name="id"
		          value="<?=$row['id']?>"
		          hidden >

		   <button type="submit" 
		           class="btn btn-primary"
		           name="update">Editar</button>
		    <a href="read.php" class="link-primary">Voltar a Tabela</a>
	    </form>
	</div>
</body>
</html>