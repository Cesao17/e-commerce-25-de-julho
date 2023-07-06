<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
.container {
  position: relative;
  width: 75%;
}

.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle{
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}


.container:hover .image {
  opacity: 0.3;
}

.container:hover .middle {
  opacity: 1;
}

.text {
  background-color: #4CAF50;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}
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
      background-color: #161c2e;
	  color:#fff;
      padding: 25px;	
    }
	</style>
</head>
<body>
<form name="php" action="compras.php" method="post">
<div class="container-fluid" style="background-color:#161c2e;color:#fff;height:230px;">
  <center><img src="logo.png"  width=180 height=180 border="0px" align=""  /></center>
  <center><div class="container-fluid" style="background-color:#161c2e;color:#ef6c35;"><p>Camisetas dos maiores times de CSGO você encontra aqui</p></center>
</div>
<nav class="navbar-inverse" style="background-color:#161c2e;">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav">
      <li ><a href="index.html">Home</a></li>
      <li><a href="sul.html">America do Sul</a></li>
      <li><a href="NOCE.html">America do Norte</a></li>
	  <li><a href="europa.html">Europa</a></li>
    </ul>
   
	 <ul class="nav navbar-nav navbar-right">
        <li><a href="login.html"><span class="glyphicon glyphicon-user"></span> Login</a></li>
        <li><a href="html"><span class="glyphicon glyphicon-shopping-cart"></span> Carrinho</a></li>
      </ul>
  </div>
</nav>

<div class="container">
  <center><h2>Seus Pedidos</h2> </center>        
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Produto</th>
        <th>Descric&atilde;o</th>
        <th>Valor Uni.</th>
		<th>Quantidade</th>
		<th>Valor Total do produto</th>
		
      </tr>
    </thead>
    <tbody>
     <?php
	 if (isset($_POST['p1']))
	 $quant1=$_POST['p1'];
	 else
	 $quant1="0"; 
	 
	 if (isset($_POST['p2']))
	 $quant2=$_POST['p2'];
	 else
	 $quant2="0";
	  if (isset($_POST['p3']))
	 $quant3=$_POST['p3'];
	 else
	 $quant3="0";
	  if (isset($_POST['p4']))
	 $quant4=$_POST['p4'];
	 else
	 $quant4="0";
	  if (isset($_POST['p5']))
	 $quant5=$_POST['p5'];
	 else
	 $quant5="0";
	  if (isset($_POST['p6']))
	 $quant6=$_POST['p6'];
	 else
	 $quant6="0";
	 
	 if ($quant1>0)
	  echo'<tr>
        <td><img src="detona.jpg" class="img-responsive" style="width:10%" alt="Image"></td>
        <td>Camiseta Detona</td>
        <td>R$100,00</td>
		<td>'.$quant1.'</td>
        <td>R$'.$quant1*100 .'</td>
      </tr>';
	 
	  if ($quant2>0)
	  echo'<tr>
        <td><img src="luminosity.png" class="img-responsive" style="width:10%" alt="Image"></td>
        <td>Camiseta lumisosity</td>
        <td>R$80,00</td>
		<td>'.$quant2.'</td>
        <td>R$'.$quant2*80 .'</td>
      </tr>';
	  
	  if ($quant3>0)
	  echo'<tr>
        <td><img src="cloud9.png" class="img-responsive" style="width:10%" alt="Image"></td>
        <td>Camiseta cloud9</td>
        <td>R$120,00</td>
		<td>'.$quant3.'</td>
        <td>R$'.$quant3*120 .'</td>
      </tr>';
	  if ($quant4>0)
	  echo'<tr>
        <td><img src="complexity.jpg" class="img-responsive" style="width:10%" alt="Image"></td>
        <td>Camiseta complexity</td>
        <td>R$120,00</td>
		<td>'.$quant4.'</td>
        <td>R$'.$quant4*120 .'</td>
      </tr>';
	  
	  
	  if ($quant5>0)
	  echo'<tr>
        <td><img src="g2.jpg" class="img-responsive" style="width:10%" alt="Image"></td>
        <td>Camiseta g2</td>
        <td>R$50,00</td>
		<td>'.$quant5.'</td>
        <td>R$'.$quant5*50 .'</td>
      </tr>';
	  
	  if ($quant6>0)
	  echo'<tr>
        <td><img src="vitality.png" class="img-responsive" style="width:10%" alt="Image"></td>
        <td>Camiseta vitality</td>
        <td>R$60,00</td>
		<td>'.$quant6.'</td>
        <td>R$'.$quant6*60 .'</td>
      </tr>';
	  
	   ?>
	   
	   
	  
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Total:</th>
        <th>    </th>
        <th>    </th>
<th>    </th>
<th>R$<?php $total=($quant1*100)+($quant2*80)+($quant3*120)+($quant4*120)+($quant5*50)+($quant6*60);
echo $total; ?></th>
</tr></thead>

 </tbody>
  </table>
</div>

	  <center><div class="form-group">
        <label>Forma de pagamento:
        <div class="radio">
            <label><input type="radio" name="optradio" checked>Boleto</label>
            <label><input type="radio" name="optradio" checked>Cart&atilde;o</label>
</label>
        </div>
</div></center>

<center><button type="button" class="btn" data-toggle="modal" href="#demo55"><center>finalizar compra</center></button></center>


<div class="modal fade" id="demo55" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h3 class="modal-title"><CENTER> SUA COMPRA FOI FINALIZADA</CENTER></h3>
</div>
<div class="modal-body">
<p><CENTER><H5>Muito Obrigado!<BR>
Por comprar na Manto Real<br>
Volte sempre!<br></H5></CENTER></p>

</div>
</div>
</div>
</div>  

	  
</div>
<br>
<br>
<footer class="container-fluid text-center">
<p>Copyright © 2019 | César </p> <Br>
<b><p>Telefone para contato:</b> (55+) 9 9152-4378
<b><p>Endereço:</b> Rua Pará, 98700-000 Ijuí, RS
<br>
<center><B>Manto Real
</footer>

</body>
</html>