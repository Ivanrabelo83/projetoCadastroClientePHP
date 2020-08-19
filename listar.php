<?php
session_start();
require_once('estado.php');
$pessoas = [];
if (isset($_SESSION['cadastropessoal']))
$pessoas = $_SESSION['cadastropessoal'];

?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <title>Cadastro de Pessoas</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/starter-template/">

    <!-- Bootstrap core CSS -->
<link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="node_modules/node_modules/font-awesome/css/font-awesome.min" rel="stylesheet">
<link href="node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
 
 

    <style>
     body{
         padding-top:5rem;
     }
     .starter-template {
        padding: 3rem 1.5rem;
        text-align: center;

     }
    
    
    
    </style>


<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">Cadastro de Pessoas</a>
  

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link active" href="listar.php">Listar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="cadastro.php">Cadastrar</a>
      </li>
    </ul>
      </div>
</nav>

<main role="main" class="container">
<div class="starter-template">
<table class="table table-hover">
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Nome</th>
<th scope="col">Idade</th>
<th scope="col">Telefone</th>
<th scope="col">Endereço</th>
<th scope="col">Cidade</th>
<th scope="col">Estado</th>
<th scope="col">Ações</th>
</tr>
</thead>
<tbody>


<?php
      foreach($pessoas as $i => $p)
      {
        $uf = $estados[ $p['estado'] ];
        echo "<tr>";
        echo '<th scope="row">' . $i . '</th>';
        echo '<td>' . $p['nome'] . '</td>';
        echo '<td>' . $p['idade'] . '</td>';
        echo '<td>' . $p['telefone'] . '</td>';
        echo '<td>' . $p['endereco'] . '</td>';
        echo '<td>' . $p['cidade'] . '</td>';
        echo '<td>' . $uf . '</td>';
        echo '<td>';
        echo '<a class="btn btn-danger" href="apagar.php?id='. $i .'"> <i class="fa fa-trash-o fa-lg"></i></a>';
        echo '<a class="btn btn-warning" href="cadastro.php?id=' . $i . '"> <i class="fa fa-pencil fa-lg"></i></a>';
        echo '</td>';
        echo "</tr>";
        
      }
      

?>
</tbody>
</table>
</div>
</main>

  

</main><!-- /.container -->
<script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</html>
