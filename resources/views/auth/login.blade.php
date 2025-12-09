<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login | SMPN 1 Kapuas Timur</title>
	<!-- core:css -->
	<link rel="stylesheet" href="/DB/assets/vendors/core/core.css">
	<!-- endinject -->
	<!-- inject:css -->
	<link rel="stylesheet" href="/DB/assets/fonts/feather-font/css/iconfont.css">
	<link rel="stylesheet" href="/DB/assets/vendors/flag-icon-css/css/flag-icon.min.css">
	<!-- endinject -->
	<!-- Layout styles -->  
	<link rel="stylesheet" href="/DB/assets/css/demo_1/style.css">
	<!-- End layout styles -->
	<link rel="shortcut icon" href="/DB/assets/images/logo.ico" />
</head>
<body>
	<div class="main-wrapper">
		<div class="page-wrapper full-page">
			<div class="page-content d-flex align-items-center justify-content-center">
				<div class="row w-100 mx-0 auth-page">
					<div class="col-md-8 col-xl-6 mx-auto">
						<div class="card">
							<div class="row">
								<div class="col-md-4 pr-md-0">
									<div class="auth-left-wrapper" style="background: linear-gradient(135deg, #ea6666 0%, #6d2222 100%);">
										<div class="auth-left-content d-flex flex-column justify-content-center align-items-center h-100 p-4">
											<div class="text-center">
												<img src="/images/logo.png" alt="Logo" style="max-width: 50px;">
												<h4 class="text-white mt-3 mb-1">Dashboard Admin</h4>
												<p class="text-white-50">SDN Kemayoran 1 Surayabaya</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-8 pl-md-0">
									<div class="auth-form-wrapper px-4 py-5">
										<a href="/" class="noble-ui-logo d-block mb-2">Dashboard<span> Admin</span></a>
										<h5 class="text-muted font-weight-normal mb-4">Selamat Datang! Silakan masuk ke akun Anda.</h5>
										
										@if ($errors->any())
											<div class="alert alert-danger">
												<ul class="mb-0">
													@foreach ($errors->all() as $error)
														<li>{{ $error }}</li>
													@endforeach
												</ul>
											</div>
										@endif

										<form class="forms-sample" method="POST" action="{{ route('login') }}">
											@csrf
											<div class="form-group">
												<label for="username">Username</label>
												<input type="text" class="form-control @error('username') is-invalid @enderror" 
													id="username" name="username" placeholder="Masukkan username" 
													value="{{ old('username') }}" required autofocus>
												@error('username')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
												@enderror
											</div>
											<div class="form-group">
												<label for="password">Password</label>
												<input type="password" class="form-control @error('password') is-invalid @enderror" 
													id="password" name="password" placeholder="Masukkan password" required>
												@error('password')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
												@enderror
											</div>
											{{-- <div class="form-check form-check-flat form-check-primary">
												<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="remember" id="remember">
													Ingat Saya
													<i class="input-helper"></i>
												</label>
											</div> --}}
											<div class="mt-3">
												<button type="submit" class="btn btn-primary btn-block">
													<i data-feather="log-in" class="mr-2"></i>Masuk
												</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- core:js -->
	<script src="/DB/assets/vendors/core/core.js"></script>
	<!-- endinject -->
	<!-- inject:js -->
	<script src="/DB/assets/vendors/feather-icons/feather.min.js"></script>
	<script src="/DB/assets/js/template.js"></script>
	<!-- endinject -->
</body>
</html>

