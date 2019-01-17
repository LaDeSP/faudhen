<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>@yield('pagetitle')</title>
	<link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">
	<link href="{{ asset('css/customBootstrap.css') }}" rel="stylesheet">
</head>
<body>
	
	<!-- header -->
	<nav class='navbar navbar-expand'>
		<!-- bar -->
		
		<h3>
			<a class="c-link back" href="{{ url('/') }}" >
				FAUDHEN
			</a>
		</h3>
			
		@auth
			
			<a class="c-link" href="{{ url('/home') }}">Home</a>
			
			<div class="link-divider">&nbsp;</div>
			
			<a class="c-link" href="{{ route('logout') }}"
				onclick="event.preventDefault();
				document.getElementById('logout-form').submit();">
				sair
			</a>
		
			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				@csrf
			</form>
			
		@else
			
			<a class="c-link" href="{{ route('login') }}">Logar</a>
			
			<div class="link-divider">&nbsp;</div>
			
			<a class="c-link" href="{{ route('register') }}">Registrar</a>
			
		@endauth

		<!-- menu -->
		@auth
		<nav class='navbar navbar-expand'>
			<a class="c-link" href="{{ route('Disciplina.index') }}">Disciplinas</a>
			<div class="link-divider">&nbsp;</div>
			<a class="c-link" href="{{ route('Curso.index') }}">Cursos</a>
			<div class="link-divider">&nbsp;</div>
			<a class="c-link" href="{{ route('Matriz.index') }}">Matriz</a>
			<div class="link-divider">&nbsp;</div>
			<a class="c-link" href="{{ route('Oferta.index') }}">Ofertas</a>
			<div class="link-divider">&nbsp;</div>
			<a class="c-link" href="{{ route('Sala.index') }}">Salas</a>
			<div class="link-divider">&nbsp;</div>
			<a class="c-link" href="{{ route('Preferencia.editar') }}">Meu horario</a>
		</nav>
		@endauth
	</nav>
	
	<a id="back" href="{{ url()->previous() }}" class="c-link text-warning">voltar</a>
	<a id="backtotop" href="#" class="c-link text-warning">topo</a>

	<!-- body -->
	<div class='clearfix container'>

		@if(session()->has('nivel'))
			<span class="text-danger">{{ session()->get('nivel') }}</span>
		@endif

		@hasSection('halfContent')
			<div class="row content-body-h float-left mx-auto ">
					@hasSection('title')
						<h3 class="std-title">@yield('title')</h3>
					@endif
				@yield('halfContent')
			</div>
		@endif
		@hasSection('halfContent2')
			<div class="row content-body-h float-left mx-auto ">
				@hasSection('title2')
					<h3 class="std-title">@yield('title2')</h3>
				@endif
				@yield('halfContent2')
			</div>
		@endif
		<br>
		@hasSection('fullContent')
			<div class="float-left row content-body-f">
				@hasSection('title3')
					<h3 class="std-title">@yield('title3')</h3>
				@endif
				@yield('fullContent')
			</div>
		@endif

			
	</div>

	<!-- footer -->
	<nav class='navbar navbar-expan fixed-bottom'>

	</nav>
	
	<script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
	@yield('js')
</body>
</html>

