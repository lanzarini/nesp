<!DOCTYPE html>
<html lang="en">
<head>
<title>Bootstrap Case</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="header.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="tinymce/js/tinymce/tinymce.min.js"></script>


</head>
<body>

<nav class="navbar navbar-default" > <!-- CABEÇALHO -->
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" >
                <span class="icon-bar" ></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" >UNIMONTES</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
            <li class="active"><a href="#">Contratos</a></li>
            <li><a href="#">Estagios</a></li>
            <li><a href="#">Usuarios</a></li>
            <li><a href="#">Unidade</a></li>
            <li><a href="#">Area</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span>Perfil</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Sair</a></li>
            </ul>
        </div>
    </div>
</nav>  <!-- CABEÇALHO -->
    
   
<div class="container" id="divaba" data-spy="affix" data-offset-top="95"> <!-- div das abas-->
    <ul class="nav nav-tabs"> <!-- ABAS -->
    <li ><a data-toggle="tab" href="#Estagio">Estagio</a></li>
    <li class="active"><a data-toggle="tab" href="#Listadecandidatos">Lista de candidatos</a></li>
    <li><a data-toggle="tab" href="#Antigoscontratos">Antigos contratos</a></li>
    <li><a data-toggle="tab" href="#Estagiarioatual">Estagiario atual</a></li>
    <li><a data-toggle="tab" href="#Contratoatual">Contrato atual</a></li>
    </ul>  <!-- ABAS -->
</div> <!-- div das abas-->
    
    
<div class="container" id="divfore"><!-- Div Mãe dos conteudos--> 
    <div class="tab-content">  <!-- CONTEUDO DAS ABAS-->
        <div id="Estagio" class="tab-pane fade "> <!--div aba estagio-->
            <?php include "estagio.php" ?>
        </div> <!--div aba estagio-->
        <div id="Listadecandidatos" class="tab-pane fade in active"> <!--div aba usuario-->
            
        </div><!--div aba usuario-->
        <div id="Antigoscontratos" class="tab-pane fade" style="height:1000px">
            <h3>Menu 2</h3>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
        </div>
        <div id="Estagiarioatual" class="tab-pane fade">
            <?php include "Usuario.php" ?>
        </div>
        <div id="Contratoatual" class="tab-pane fade">
            <?php include "contrato.php" ?>
        </div>
      
    </div>
</div>
    

</body>
</html>

