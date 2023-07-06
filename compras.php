<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pó de Pimenta</title>
  <meta http-equiv=”Content-Type” content=”text/html; charset=iso-8859-1?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
	  
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
	  background-color: #D8D8D8;
      margin-bottom: 0;
	    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #D8D8D8;
      padding: 25px;
    }
  </style>
</head>
<body>

<div class="jumbotron">
  <div class="container text-center">
    <center><img src="essa.png" class="img-responsive" style="width:30%" alt="Image"></center>
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.htm">Home</a></li>
        <li><a href="blusas.htm">Blusas</a></li>
        <li><a href="vestidos.htm">Vestidos</a></li>
        <li><a href="calcas.htm">Calças</a></li>
        <li><a href="maquiagens.htm">Maquiagens</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
	   <li><a href="login.htm"><span class="glyphicon glyphicon-user"></span> Login</a></li>
        <li><a href="cadastro.htm"><span class="glyphicon glyphicon-user"></span> Cadastro</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Carrinho</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <h2>Striped Rows</h2>
  <p>The .table-striped class adds zebra-stripes to a table:</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Produto</th>
        <th>Descrição</th>
        <th>Valor Uni.</th>
		<th>Quantidade</th>
		<th>Valor Total do produto</th>
		
      </tr>
    </thead>
    <tbody>
     <?php
	 if (isset($_POST['quant1']))
	 $a=$_POST['quant1'];
	 else
	 $a="0"; 
	 
	 if (isset($_POST['quant2']))
	 $b=$_POST['quant2'];
	 else
	 $b="0";
	  if (isset($_POST['quant3']))
	 $c=$_POST['quant3'];
	 else
	 $c="0";
	  if (isset($_POST['quant4']))
	 $d=$_POST['quant4'];
	 else
	 $d="0";
	  if (isset($_POST['quant5']))
	 $e=$_POST['quant5'];
	 else
	 $e="0";
	  if (isset($_POST['quant6']))
	 $f=$_POST['quant6'];
	 else
	 $f="0";
	 
	 if ($a>0)
	  echo'<tr>
        <td><img src="blusakawaii.png" class="img-responsive" style="width:10%" alt="Image"></td>
        <td>Blusa rosa kawaii</td>
        <td>R$100,00</td>
		<td>'.$a.'</td>
        <td>R$'.$a*100 .'</td>
      </tr>';
	 
	  if ($b>0)
	  echo'<tr>
        <td><img src="vestidoazul.png" class="img-responsive" style="width:10%" alt="Image"></td>
        <td>Vestido Azul curto</td>
        <td>R$500,00</td>
		<td>'.$b.'</td>
        <td>R$'.$b*500 .'</td>
      </tr>';
	  
	  if ($b>0)
	  echo'<tr>
        <td><img src="vestidoazul.png" class="img-responsive" style="width:10%" alt="Image"></td>
        <td>Vestido Azul curto</td>
        <td>R$500,00</td>
		<td>'.$b.'</td>
        <td>R$'.$b*500 .'</td>
      </tr>';
	  if ($c>0)
	  echo'<tr>
        <td><img src="calça-boca-de-sino.png" class="img-responsive" style="width:10%" alt="Image"></td>
        <td>Calça boca de sino</td>
        <td>R$80,00</td>
		<td>'.$c.'</td>
        <td>R$'.$c*80 .'</td>
      </tr>';
	  
	  
	  if ($d>0)
	  echo'<tr>
        <td><img src="camisaunicornio.png" class="img-responsive" style="width:10%" alt="Image"></td>
        <td>Camisa de Unicornio</td>
        <td>R$90,00</td>
		<td>'.$d.'</td>
        <td>R$'.$d*90 .'</td>
      </tr>';
	  
	  if ($e>0)
	  echo'<tr>
        <td><img src="jeans.png" class="img-responsive" style="width:10%" alt="Image"></td>
        <td>Calça jeans</td>
        <td>R$500,00</td>
		<td>'.$e.'</td>
        <td>R$'.$e*500 .'</td>
      </tr>';
	  
	  
	  
	  
	  
	  ?>

	  </tbody>
  </table>
</div>
<br>
<br>

<footer class="container-fluid text-center">
  <p>Copyright © 2019 | Arthur </p> <Br>
<b><p>Telefone para contato:</b>55 996377069
<b><p>Endereço:</b> Rua Ernesto Alves, 98700000 Ijuí
<br>
<center><B>Pó de Pimenta.
</footer>

</body>
</html>