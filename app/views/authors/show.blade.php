<!DOCTYPE html>
<!-- 
	Listagem de todos os autores
 -->
<html>
<head>
	<title>Autores</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="navbar-header">
			<a href="{{URL::to('/')}}" class="navbar-brand">Sciencehub</a>
		</div>
		<div class="nav navbar-nav">
			<li><a href="{{URL::to('authors/create')}}">New Author</a></li>
		</div>
	</div>
</body>
</html>