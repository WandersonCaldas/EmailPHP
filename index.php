<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Contato</title>
        <script src="jquery/jquery-1.8.0.min.js" type="text/javascript"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <style>
          /* Remove the navbar's default margin-bottom and rounded borders */
          .navbar {
            margin-bottom: 0;
            border-radius: 0;
          }

          /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
          .row.content {height: 450px}

          /* Set gray background color and 100% height */
          .sidenav {
            padding-top: 20px;
            background-color: #f1f1f1;
            height: 100%;
          }

          /* Set black background color, white text and some padding */
          footer {
            background-color: #555;
            color: white;
            padding: 15px;
          }

          /* On small screens, set height to 'auto' for sidenav and grid */
          @media screen and (max-width: 767px) {
            .sidenav {
              height: auto;
              padding: 15px;
            }
            .row.content {height:auto;}
          }
        </style>
    </head>
    <body>           
        <form id="frm1" role="form" action="Email.php">
            <nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-envelope"></span></a>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                
                <ul class="nav navbar-nav navbar-right">
                  
                </ul>
              </div>
            </div>
          </nav>

            <div class="container-fluid text-center">
            <div class="row content">
              <div class="col-sm-2 sidenav">
                
              </div>
              <div class="col-sm-8 text-left">
                <h1>Remetente</h1>
                <p>
                    <input type="email" class="form-control" id="remetente" readonly="readonly" value="wanderson">
                </p>
                <hr>
                <h3>Assunto</h3>
                <p>
                    <input type="email" class="form-control" name="assunto" id="assunto">
                </p>
                <hr>
                <h3>Destinatário</h3>
                <p>
                    <input type="email" class="form-control" name="destino" id="destino">
                </p>
                <hr>
                <h3>Mensagem</h3>
                <p>
                    <textarea class="form-control" rows="11" name="mensagem" id="mensagem"></textarea>
                </p>
              </div>
              <div class="col-sm-2 sidenav">
                <button type="button" id="btn_enviar" class="btn btn-primary btn-block">Enviar</button>
                <button type="reset" class="btn btn-default btn-block">Limpar</button>
              </div>
            </div>
          </div>
        </form>
          <footer class="container-fluid text-center">
              <p>
                   <?php
                    echo(date("d/m/Y"));
                    ?>
              </p>
          </footer>
    </body>
    
    <script type="text/javascript">  
        $("#btn_enviar").click(function() {                                 
           if (ValidarFormulario())
          {                    
              $("#frm1").submit();
          }
          
          function ValidarFormulario()
          {
              if($("#destino").val() === '' || $("#mensagem").val() === '' || $("#assunto").val() === '')
              {
                  alert('PREENCHA TODO O FORMULÁRIO');
                  return false;
              }
              else
              {
                  return true;
              }
          }
      });
    </script>
</html>
