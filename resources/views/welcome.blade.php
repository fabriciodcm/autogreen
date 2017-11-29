<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Auto Green</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/css_projeto.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
    <body>
	<!-- cabeçalho -->
	<div class="inicio_ag">
	<div class="container-fluid container inicio_ag" >
		<div class="row inicio_ag">
			
			<div class="col-lg-7 col-md-4 col-sm-2 col-xs-2">
				<img id="logo-central" class="img-responsive" src="imagens/logo_teste.png">
			</div>
			
			<ul class="nav navbar-nav navbar-right" class="col-lg-5 col-md-4 col-sm-2 col-xs-2">
            <li><a href="{{ route('login') }}" class="glyphicon glyphicon-user">Login</a></li>
            <li><a href="{{ route('register') }}" class="glyphicon glyphicon-user">Sign Up</a></li>
			<!--<li><a href="/login"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
			<li><a href="/register"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
			</ul>
		</div>
	</div>
	</div>
	<!-- imagem de fundo -->
		<div class="conteiner-fluid" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="row"> 
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<img src="imagens/fundo_estrada3.jpg" class="img-responsive">
				</div>
			</div>
		</div>
		
	<!-- menu -->
	<nav class="navbar navbar-inverse" class="col-lg-8 col-md-12 col-sm-12 col-xs-12" id="menu-princ">
	  <div class="container-fluid">
	  	  <div class="row"> 
		<div class="navbar-header">
		  <a class="navbar-brand" ></a>
		</div>
		<ul class="nav navbar-nav" >
			  <li class="active" style="background-color:#020722;"><a href="index.html">Home</a></li>
			  <li><a href="all_news.html">All News</a></li>
			  <li><a href="about.html">About</a></li>
			  <li><a href="contact.html">Contact</a></li>
		</ul>
		<form class="navbar-form navbar-left" >
			  <div class="input-group" >
				<input type="text" class="form-control" placeholder="Search">
				<div class="input-group-btn" >
					<button class="btn btn-default col-lg-4 col-md-4 col-sm-2 col-xs-2" type="submit">
					<i class="glyphicon glyphicon-search"></i>
				  </button>
				</div>
			  </div> 
			</form>
			
	  </div>
	  </div>
	</nav>

	<!-- Carrosel de noticias e imagens -->
	<div class="conteiner">
		<div clas="row">
			<div class="col-lg-12">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					  </ol>

					  <!-- Wrapper for slides -->
					  
						
						@for ($i = 0; $i < count($posts); $i++)

						@if($i == 0)
						<div class="carousel-inner" role="listbox">
						<div class="item active">
							<div class="row">
								<div class="col-lg-6 text-center">
									<h1 clas="name"> {{ $posts[$i]->manchete }} </h1>
									<p> {{ $posts[$i]->noticia }} </p>
									<p> <strong> <a href="{{ $posts[$i]->urlFonte }}"> News Link </a></strong></p>								
								</div>
								<div class="col-lg-6">
									<img src="{{ $posts[$i]->urlImagem }}" class="img-responsive">
								</div>
							</div>
						
					  </div>
						@endif
						<div class="item">
							<div class="row">
								<div class="col-lg-6 text-center">
									<h1 clas="name"> {{ $posts[$i]->manchete }} </h1>
									<p> {{ $posts[$i]->noticia }} </p>
									<p> <strong> <a href="{{ $posts[$i]->urlFonte }}"> News Link </a></strong></p>								
								</div>
								<div class="col-lg-6">
								<img src="{{ $posts[$i]->urlImagem }}" class="img-responsive">
									<!-- <img src="imagens/teste_carrossel3.jpg" class="img-responsive"> -->
								</div>
							</div>
						</div>
						
						@endfor

					  <!-- Controls -->
					  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					  </a>
					  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					  </a>
					</div>
			</div>
		</div>
	</div>
	<!-- conteudo principal --> 
	<div class="container" id="main-news">
	<div class="row">
		<h2> <Strong> Main News </strong> </h2>            
	</div>   
	</div>
	<!-- Tabela Colaboradores -->
	<div class="container">
	<div class="row">
		<h2> <Strong> Auto Green Contributors </strong> </h2>            
	    <table class="table table-hover">
			<thead>
			  <tr>
				<th>Profile Picture</th>
				<th>Firstname</th>
				<th>Profile Picture</th>
				<th>Firstname</th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
				<td> <img class="picture-img img-responsive" src="imagens/picture.png"> </td>
				<td> Name 1 </td>
				<td> <img class="picture-img img-responsive" src="imagens/picture.png"> </td>
				<td> Name 2</td>
			  </tr>
			  <tr>
				<td> <img class="picture-img img-responsive" src="imagens/picture.png"> </td>
				<td> Name 3 </td>
				<td> <img class="picture-img img-responsive" src="imagens/picture.png"> </td>
				<td> Name 4 </td>
			  </tr>
			  <tr>
				<td> <img class="picture-img img-responsive" src="imagens/picture.png"> </td>
				<td> Name 5 </td>
				<td> <img class="picture-img img-responsive" src="imagens/picture.png"> </td>
				<td> Name 6 </td>
			  </tr>
			</tbody>
		  </table>
		</div>
		</div>
		<!--Rodape -->
		<div class="container-fluid" id="rodape-style">
			<div class="container">
				<div class="row-fluid">
					<div class="col-lg-12 rodape">
						<div class="col-lg-4 desenvolv" style="text-align: center">
						  <br>  <a href="#" target="blank"><img id="footer-logo" src="imagens/logo_final.png"></a>
						  <p> Auto Green: Technology and Sustainability
						</div>
						<div class="col-lg-4" style="text-align: center">
							<br><br><br> <p> "The future will depend on what we do in the present" </p>
							<p> - Mahatma Gandhi </p>
						</div>
						<div class="col-lg-4">
							<br> <ul class="sociais img-responsive" style="list-style-type:none">
								<li><a href=""><img id="sociais-img" src="imagens/logo_facebook.png"></a></li>
								<li><a href=""><img id="sociais-img" src="imagens/logo_youtube.png"></a></li>
								<li><a href=""><img id="sociais-img" src="imagens/logo_instagram.png"></a></li>
								<li><a href=""><img id="sociais-img" src="imagens/logo_gmail.png"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
