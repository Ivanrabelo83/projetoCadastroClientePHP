<?php

var_dump
session_start();
require_once('estado.php');
$id = ' ';
$nome = ' ';
$idade = ' ';
$telefone = ' ';
$endereco = ' ';
$cidade = ' ';
$estado = ' ';

if (count($_GET)) {
  $id = $_GET['id'];
  $nome = $_SESSION['cadastropessoal'][$id]['nome'];
  $idade =  $_SESSION['cadastropessoal'][$id]['idade'];
  $telefone =  $_SESSION['cadastropessoal'][$id]['telefone'];
  $endereco =  $_SESSION['cadastropessoal'][$id]['endereco'];
  $cidade =  $_SESSION['cadastropessoal'][$id]['cidade'];
  $estado =  $_SESSION['cadastropessoal'][$id]['estado'];
}

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
      <li class="nav-item ">
        <a class="nav-link " href="listar.php">Listar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="cadastro.php">Cadastrar</a>
      </li>
    </ul>
    </div>
</nav>

<main role="main" class="container">
<div class="starter-template">
      <form style="text-align: left"; method="post" action="salvar.php">
      <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome da Pessoa" value="<?php echo $nome; ?>">
        </div>

        <div class="form-row">
        <div class="form-group col-md-4">
            <label for="idade">Idade</label>
            <input type="text" class="form-control" name="idade" id="idade" placeholder="Idade da pessoa" value="<?php echo $idade; ?>">
        </div>

        <div class="form-group col-md-8">
            <label for="telefone">Nome</label>
            <input type="text" class="form-control" name="telefone" id="nome" placeholder="Telefone da pessoa" value="<?php echo $telefone; ?>">
        </div>
          
        <div class="form-group col-md-12">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Endereço da Pessoa" value="<?php echo $endereco; ?>">
        </div>

        <div class="form-row">

        <div class="form-group col-md-8">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade da pessoa" value="<?php echo $cidade; ?>">
        </div>
        <div class="form-group col-md-4">
        <label for="estado">Estado</label>
        <select  id="estado" name="estado" class="form-control">
        
        <?php
            $uf_sel = $estados[0];
            if ($estado != '')
            $uf_sel = $estado;
            foreach ($estados as $i => $uf) {
              if ($i == $uf_sel) 
                echo "<option value=\"$i\" selected>$uf</option>";
              else
              echo "<option value=\"$i\" selected>$uf</option>"; 
           }
       ?>
      
        </select>
        </div>
        </div>
                      
         
        <div style="width:100%;">
         
        <button type="submit" class="btn btn-primary">Salvar</button>
        <button type="reset" class="btn btn-warning">Limpar</button>
        </div>
      </form>

</div>
</main>

  

</main><!-- /.container -->
<script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</html>
