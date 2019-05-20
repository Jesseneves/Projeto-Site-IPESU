<?php include("classe/conexao.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>


<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Pizzaria Atlântico</title>

<!-- linkar Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:600' rel='stylesheet' type='text/css'>

<!-- fonte personalizada -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!-- linkar bootstrap -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />

<!-- animações animate.css -->
<link rel="stylesheet" href="assets/animate/animate.css" />
<link rel="stylesheet" href="assets/animate/set.css" />

<!-- galeria do css -->
<link rel="stylesheet" href="assets/gallery/blueimp-gallery.min.css">

<!-- incones -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

<!--links para o estilos do css -->
<link rel="stylesheet" href="assets/style.css">

</head>

<body>
<!-- isso da o efeito ao rolar a pagina -->
<div class="topbar animated fadeInLeftBig"></div>

<!-- cabeçalho -->

      <div class="container">
         <!-- essa div deixa a barra de navegação sempre visivel mesmo que a pagina role -->
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="top-nav">
          <div class="container">
		  <!-- esta faz se ajustar de acordo com o tamanho do site -->
            <div class="navbar-header">
              <!-- Logo atlantico começa -->
              <a class="navbar-brand" href="#home"><img src="images/pizza2.png" alt="logo"></a>
              <!-- Logo termina -->

				



            </div>


            <!-- clicar no menu de navegação para revelar o que há -->
            <div class="navbar-collapse  collapse">
			
			<!-- ul criar uma lista de navegação na direita -->
			
              <ul class="nav navbar-nav navbar-right scroll">
			  
			  <!-- elementos da lista com seus identificaadores -->
			  
                 <li class="active"><a href="#home">Home</a></li>
                 <li ><a href="#menu">Menu</a></li>
                 <li ><a href="#foods">Comidas</a></li>
                 <li ><a href="#contact">Contato</a></li>
              </ul>
            </div>
            

          </div>
        </div>

      </div>
    </div>
<!-- cabeçalho -->




<div id="home">
<!-- o baner da pizza grande, alt caso a conexao esteja lenta e class defini como vai ser pelo css -->
<div class="banner">
          <img src="images/pizza-back1.jpg" alt="banner" class="img-responsive">
		  <!-- definir uma legenda de tabela cocm caption -->
          <div class="caption">
            <div class="caption-wrapper">
              <div class="caption-info">              
              <i class="fa fa-coffee fa-5x animated bounceInDown"></i>
              <h1 class="animated bounceInUp"> Atlântico - O Restaurante feito para você </h1>
              <p class="animated bounceInLeft"> Site não oficial, uso para fins didáticoss, <a href=https://www.pizzariaatlantico.com.br/> site oficial da Atlântico</a></p>
             <a href="#menu" class="explore animated bounceInDown"><i class="fa fa-angle-down  fa-3x"></i></a>
              </div>
            </div>
          </div>
</div>

</div>









<!-- historia e menu  -->
<div id="menu"  class="container spacer about">
<h2 class="text-center wowload fadeInUp">Conheça mais sobre a <a href=https://www.pizzariaatlantico.com.br/> Atlântico</a></h2>
  <div class="row">
  <div class="col-sm-6 wowload fadeInLeft">
    <h4><i class="fa fa-camera-retro"></i> História </h4>
	<!-- paragrafo-->
    <p>Uma empresa de base familiar, o Grupo Atlântico foi fundado por Ivanildo e Edna Lira em 1987. Foi no bairro de Jardim Atlântico, em Olinda, que surgiu a primeira unidade, na qual trabalhavam apenas 14 funcionários. Com muito empenho e ajuda da família, o negócio cresceu e entre 2002 e 2010 foram inaugurados os restaurantes de Paissandu, Graças, Ipsep e Piedade.

Em 2013 desenvolvemos o formato Express, a primeira loja foi inaugurada na Ferreira Costa da Tamarineira. Devido ao grande sucesso e aceitação da clientela, estamos presentes também nos shoppings Guararapes, Recife, Tacaruna, Boa Vista, RioMar e Paulista North Way. Também estamos cada vez mais perto de você através do delivery, atendendo a 80% da RMR pelo call center, site e aplicativo.</p>


    <p>Em todo empreendimento bem sucedido há um segredo, e o nosso é a união. O grupo continua sendo administrado pela família Lira e seus fundadores atuam junto com os filhos e dezenas de colaboradores empenhados para satisfazer seus clientes. Essa é a nossa história e você é parte dela! Obrigado pela confiança.</p> 
    

  </div>
  <div class="col-sm-6 wowload fadeInRight">
    <!-- menus de preço -->
     <h4><i class="fa fa-bars"></i> Menu da Atlântico</h4>

		<!-- nessa div ele vai agrupar os paineis e recolhe-los , dar semantica no role, e especificar que a mais de um elemento existente para selecionar  -->
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
	    <!--Criar  um painel basico -->
  <div class="panel panel-default">
        <!-- adiciona titulo ao painel e lista dinamica -->
    <div class="panel-heading" role="tab">
<!---ajustar estilo do painel, quando clicar no titulo aparecera os outros elementos estendidos para baixo ,com suaa referencia se o comteudo é redimensionavel
     ou não alem de informar o id do elemento superior -->
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         <i class="fa fa-coffee"></i> Bebidas
        </a>
      </h4>
    </div>
	<!-- dar identificações aos colapsos, que sao elementos recolhiveis e dinamicos-->
    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel">
	<!--um painel basico,cleaar fix para ajustar painel , com elementos flutando para esquerda e direita, e o preço usando o sistema de coluna ou grid-->
      <div class="panel-body">
        <div class="clearfix food-list"><div class="pull-left">Coca-Cola</div><span class="pull-right">R$ 6.00</span></div>
        <div class="clearfix food-list"><div class="pull-left">Fanta</div><span class="pull-right">R$ 6.00</span></div>
        <div class="clearfix food-list"><div class="pull-left">Sprite</div><span class="pull-right">R$ 6.00</span></div>
        <div class="clearfix food-list"><div class="pull-left">Kuat</div><span class="pull-right">R$ 6.00</span></div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
         <i class="fa fa-fire"></i> Pizzas
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel">
      <div class="panel-body">
        <div class="clearfix food-list"><div class="pull-left">Atum</div><span class="pull-right">R$ 48.00</span></div>
        <div class="clearfix food-list"><div class="pull-left">Mexicana</div><span class="pull-right">R$ 51.00</span></div>
        <div class="clearfix food-list"><div class="pull-left">Cebola</div><span class="pull-right">R$ 46.00</span></div>
        <div class="clearfix food-list"><div class="pull-left">Frango Catupiri</div><span class="pull-right">R$ 41.00</span></div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
         <i class="fa fa-beer"></i> Petiscos
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel">
      <div class="panel-body">
        <div class="clearfix food-list"><div class="pull-left">Calabresa e Fritas</div><span class="pull-right">R$ 16.00</span></div>
        <div class="clearfix food-list"><div class="pull-left">Frango Passarinnho</div><span class="pull-right">R$ 20.00</span></div>
        <div class="clearfix food-list"><div class="pull-left">Bolinho de Bacalhau</div><span class="pull-right">R$ 23.00</span></div>
        <div class="clearfix food-list"><div class="pull-left">Carne acebolada</div><span class="pull-right">R$ 33.00</span></div>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
         <i class="fa fa-spoon"></i> Pratos
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel">
      <div class="panel-body">
        <div class="clearfix food-list"><div class="pull-left">Camarões ao Catupiri</div><span class="pull-right">R$ 77.00</span></div>
        <div class="clearfix food-list"><div class="pull-left">Camarões a Grega</div><span class="pull-right">R$ 70.00</span></div>
        <div class="clearfix food-list"><div class="pull-left">Filé ao molho madeira</div><span class="pull-right">R$ 63.00</span></div>
        <div class="clearfix food-list"><div class="pull-left">Filé Chateubriand</div><span class="pull-right">R$ 72.00</span></div>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
         <i class="fa fa-birthday-cake"></i> Massas
        </a>
      </h4>
    </div>
    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel">
      <div class="panel-body">
        <div class="clearfix food-list"><div class="pull-left">Fettucine a Bolonhesa</div><span class="pull-right">R$ 40.00</span></div>
        <div class="clearfix food-list"><div class="pull-left">Fettucine a Parisiense</div><span class="pull-right">R$ 39.00</span></div>
        <div class="clearfix food-list"><div class="pull-left">Fettucine</div><span class="pull-right">R$ 47.00</span></div>
        <div class="clearfix food-list"><div class="pull-left">Penne com calabresa</div><span class="pull-right">R$ 29.00</span></div>
      </div>
    </div>
  </div>


</div>



  </div>
  </div>

  
</div>



<!--Ilustrações -->
<!-- clearfix do grid para deixa-lo sem bordas mal feitas, efeito ao passar o mouse e alt caso site nao carregue ,efeito  de letras -->
<div id="foods"  class=" clearfix grid"> 
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/1.jpg" alt="img01"/>
        <figcaption>
            <h2>Pizzas</h2>	
            <p>A Atlântico possui uma variedade enorme de pizzas<br>
			<!-- agrupar os elementos com veja mais  -->
            <a href="images/portfolio/1.jpg" title="1" data-gallery>Veja mais</a></p>            
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/2.jpg" alt="img01"/>
        <figcaption>
            <h2>Refrigerantes</h2>
            <p>LResfreque-se aqui<br>
            <a href="images/portfolio/2.jpg" title="1" data-gallery>Veja mais</a></p>            
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/3.jpg" alt="img01"/>
        <figcaption>
            <h2>Massas</h2>
            <p>Massas de todos os tipos<br>
            <a href="images/portfolio/3.jpg" title="1" data-gallery>Veja mais</a></p>            
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/4.jpg" alt="img01"/>
        <figcaption>
            <h2>Petiscos</h2>
            <p>Vai um tira gosto?<br>
            <a href="images/portfolio/4.jpg" title="1" data-gallery>Veja mais</a></p>            
        </figcaption>
    </figure>
     
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/5.jpg" alt="img01"/>
        <figcaption>
            <h2>Pratos</h2>
            <p>Pratos dos mais diversos tipos<br>
            <a href="images/portfolio/5.jpg" title="1" data-gallery>Veja mais</a></p>            
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/6.jpg" alt="img01"/>
        <figcaption>
            <h2>Atlântico</h2>
            <p>A melhor pizzaria  <br>
            <a href="images/portfolio/6.jpg" title="1" data-gallery>Veja mais</a></p>            
        </figcaption>
    </figure>
     
    
    

     
</div>


   <!-- cria um slite das ilustrações usaando javassript -->
   	<ol class="carousel-indicators">
    <li data-target="#carousel-testimonials" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-testimonials" data-slide-to="1"></li>
    <li data-target="#carousel-testimonials" data-slide-to="2"></li>
  	</ol>
  </div>



    </div>
  </div>

<!--contato -->
<div id="contact" class="spacer">

<div class="container contactform center">
<h2 class="text-center  wowload fadeInUp">Reserva</h2>
  <div class="row wowload fadeInLeftBig">      
      <div class="col-sm-6 col-sm-offset-3 col-xs-12">   
        <!-- imput para digitar -->
        <input type="text" placeholder="Nome">
        <input type="text" placeholder="E-Mail">
        <textarea rows="5" placeholder="Mensagem"></textarea>
        <button class="btn btn-primary"><i class="fa fa-paper-plane"></i> Enviar</button>
      </div>
  </div>



</div>

</div>
<div id="map"></div>



<!-- Rodapé -->
<div class="footer text-center spacer">
<p class="wowload flipInX"><a href="#"></i></a> <a href="#"><i class="fa fa-flickr fa-2x"></i></a> </p>
Copyright 2019 Jessé das Neves © Todos os direitos reservados
</div>

<a href="#home" class="gototop "><i class="fa fa-angle-up  fa-3x"></i></a>





<!-- lithgbox do bootsrap-->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- O container de slides -->
    <div class="slides"></div>
    <!-- Controle das bordas -->
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <!-- dialogo ligthbox -->
</div>



<!-- jquery -->
<script src="assets/jquery.js"></script>

<!-- wow script -->
<script src="assets/wow/wow.min.js"></script>


<!-- boostrap -->
<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="assets/mobile/touchSwipe.min.js"></script>
<script src="assets/respond/respond.js"></script>

<!-- galeria -->
<script src="assets/gallery/jquery.blueimp-gallery.min.js"></script>



<!-- script css -->
<script src="assets/script.js"></script>

</body>
</html>