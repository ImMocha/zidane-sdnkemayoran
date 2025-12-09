@extends('Dashboard.layouts.main')

@section('content')
<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title">Edit Profile</h6>
				
				@if(session('success'))
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						{{ session('success') }}
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				@endif

				@if ($errors->any())
					<div class="alert alert-danger">
						<ul class="mb-0">
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif

				<form class="forms-sample" method="POST" action="{{ route('profile.update') }}">
					@csrf
					@method('PUT')

					<div class="form-group">
						<label for="name">Nama Lengkap</label>
						<input type="text" class="form-control @error('name') is-invalid @enderror" 
							id="name" name="name" placeholder="Masukkan nama lengkap" 
							value="{{ old('name', $user->name) }}" required>
						@error('name')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control @error('username') is-invalid @enderror" 
							id="username" name="username" placeholder="Masukkan username" 
							value="{{ old('username', $user->username) }}" required>
						@error('username')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control @error('email') is-invalid @enderror" 
							id="email" name="email" placeholder="Masukkan email" 
							value="{{ old('email', $user->email) }}" required>
						@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

					<div class="form-group">
						<label for="password">Password Baru (Kosongkan jika tidak ingin mengubah)</label>
						<input type="password" class="form-control @error('password') is-invalid @enderror" 
							id="password" name="password" placeholder="Masukkan password baru">
						@error('password')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

					<div class="form-group">
						<label for="password_confirmation">Konfirmasi Password Baru</label>
						<input type="password" class="form-control" 
							id="password_confirmation" name="password_confirmation" 
							placeholder="Konfirmasi password baru">
					</div>

					<button type="submit" class="btn btn-primary mr-2">
						<i data-feather="save" class="mr-2"></i>Simpan Perubahan
					</button>
					<a href="{{ route('dashboard') }}" class="btn btn-light">
						<i data-feather="x" class="mr-2"></i>Batal
					</a>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection

