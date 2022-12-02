<?php
	session_start();

	if (!isset($_SESSION["usuario"])){
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de tarefas</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
  <!--importando os ícones-->
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <header>
        <nav>
            <a class="name" href="#" >To do list</a>
            <a class ="Redes" href="https://linktr.ee/sindelschuquel" target = "_blank" rel= "external">Redes sociais</a>
            <a class="Sobre" href= "páginaa.html" rel="next"> Sobre </a>
            <a class= "Sair"href="sair.php">Sair</a>

        </nav>
    </header>
    <div class="to-do">
        <div class="header">
          <p>Adicione suas tarefas</p>
          <button><i class='bx bxs-trash-alt'></i></button>
        </div>
        <br />
        <div class="divInsert">
          <input class="textInsert" type="text" />
          <button><i class='bx bx-plus'></i></button>
        </div>
        <ul></ul>
      </div>
   <script src="index.js"></script>
</body>


</html>
