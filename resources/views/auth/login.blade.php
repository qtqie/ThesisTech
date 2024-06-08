@extends('layouts.app')

@section('content')
	<div class="container h-100 d-flex align-items-center justify-content-center">
		<div class="row justify-content-center w-100">
			<div class="col-md-4">

				<div class="mb-3 text-center">
					<a class="navbar-brand btn btn-light" href="{{ route('profile.index') }}" style="font-size: 2em; font-weight: bold;">
						{{ config('app.name', 'ThesisTech') }}
					</a>
				</div>

				<div class="card shadow-sm px-2 border-0">

					<div class="card-body">
						<form method="POST" action="{{ route('login') }}">
							@csrf

							<div class="mb-3">
								<label for="email" class="col-form-label">{{ __('Email') }}</label>

								<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
									value="{{ old('email') }}" required autocomplete="email" autofocus>

								@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>

							<div class="mb-3">
								<label for="password" class="form-label">{{ __('Password') }}</label>

								<input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
									name="password" required autocomplete="current-password">

								@error('password')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>

							<div class="mb-3">
								<input class="form-check-input" type="checkbox" name="remember" id="remember"
									{{ old('remember') ? 'checked' : '' }}>

								<label class="form-check-label" for="remember">
									{{ __('Remember me') }}
								</label>
							</div>

							<div class="mb-0 text-end">
								@if (Route::has('password.request'))
									<a class="btn btn-link" href="{{ route('password.request') }}">
										{{ __('Forgot your password?') }}
									</a>
								@endif

								<button type="submit" class="btn btn-primary">
									{{ __('LOG IN') }}
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection