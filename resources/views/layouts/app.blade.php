<!doctype html>
<html class="h-100" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'ThesisTech') }}</title>

	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.bunny.net">
	<link rel="stylesheet" href="https://fonts.bunny.net/css?family=Nunito">

	<!-- Scripts -->
	@vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
@if (auth()->check())
    @if (auth()->user()->role == 'platinum')
        <body class="h-100 bg-light">
    @elseif (auth()->user()->role == 'staff')
        <body class="h-100" style="background-color: MintCream; height: 100vh;">
    @elseif (auth()->user()->role == 'mentor')
        <body class="h-100" style="background-color: AliceBlue;">
    @endif
@else
    <body class="h-100 bg-light">
@endif
	<div id="app" class="h-100">
		<main class="h-100">
			@auth
				<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
					<div class="container">
						<a class="navbar-brand" href="{{ route('profile.index') }}">
							{{ config('app.name', 'ThesisTech') }}
						</a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
							aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
							{{ __('Menu') }}
						</button>


						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<!-- Left Side Of Navbar -->
							<ul class="navbar-nav me-auto">
								<li class="nav-item dropdown">
									<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
										{{__('User Profile')}}
									</a>

									<div class="dropdown-menu dropdown-menu-end border-0 shadow" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="{{ route('profile.show', ['user' => auth()->user()->id]) }}">
											{{ __('View Own Profile') }}
										</a>
										<a class="dropdown-item" href=" {{ route('profile.index') }} ">
											{{ __('Search User') }}
										</a>
										@if(Auth::user()->hasRole('staff'))
										<a class="dropdown-item" href="{{ route('register') }}">
											{{ __('Register New User') }}
										</a>
										<a class="dropdown-item" href="{{ route('generate.report') }}">
											{{ __('Generate Report') }}
										</a>
										@endif
									</div>
								</li>
								<li class="nav-item dropdown">
									<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
										aria-haspopup="true" aria-expanded="false" v-pre>
										{{__('Expert')}}
									</a>

									<div class="dropdown-menu dropdown-menu-end border-0 shadow" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="{{ route('listview') }}">
											{{ __('View Expert') }}
										</a>
										<a class="dropdown-item" href="{{ route('addExpert') }}">
											{{ __('Add Expert') }}
										</a>
										<a class="dropdown-item" href="{{ route('generateReport') }}">
											{{ __('Generate Report') }}
										</a>
										<a class="dropdown-item" href="{{ route('searchExpert') }}">
											{{ __('Search Expert') }}
										</a>
									</div>
								</li>
								<li class="nav-item dropdown">
									<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
										aria-haspopup="true" aria-expanded="false" v-pre>
										{{__('Publication')}}
									</a>

									<div class="dropdown-menu dropdown-menu-end border-0 shadow" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href=""
											onclick="event.preventDefault();">
											{{ __('View Profile') }}
										</a>
										<a class="dropdown-item" href=""
											onclick="event.preventDefault();">
											{{ __('Search User') }}
										</a>
									</div>
								</li>
								
							</ul>

							<!-- Right Side Of Navbar -->
							<ul class="navbar-nav ms-auto">
								<!-- Authentication Links -->
								<li class="nav-item dropdown">
									<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
										aria-haspopup="true" aria-expanded="false" v-pre>
										{{ Auth::user()->name }}
									</a>

									<div class="dropdown-menu dropdown-menu-end border-0 shadow" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="{{ route('logout') }}"
											onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
											{{ __('Log Out') }}
										</a>

										<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
											@csrf
										</form>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</nav>	
			@endauth
				@yield('content')
		</main>
	</div>
		<footer class="py-3 bg-white border-top shadow-sm mt-auto">
			<p class="m-0 text-center text-black">Copyright &copy; ThesisTech 2024</p>
		</footer>
</body>

</html>