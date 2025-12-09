@extends('Dashboard.layouts.main')

@section('content')
<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<div class="d-flex justify-content-between align-items-center mb-4">
					<h6 class="card-title mb-0">Pengelolaan Admin</h6>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#adminModal" onclick="resetForm()">
						<i data-feather="plus" class="mr-2"></i>Tambah Admin
					</button>
				</div>

				<div class="table-responsive">
					<table id="adminsTable" class="table table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Username</th>
								<th>Email</th>
								<th>Tanggal Dibuat</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							@foreach($admins as $index => $admin)
							<tr>
								<td>{{ $index + 1 }}</td>
								<td>{{ $admin->name }}</td>
								<td>{{ $admin->username }}</td>
								<td>{{ $admin->email }}</td>
								<td>{{ $admin->created_at->format('d/m/Y') }}</td>
								<td>
									<button type="button" class="btn btn-sm btn-info" onclick="editAdmin({{ $admin->id }})" title="Edit">
										<i data-feather="edit-2" class="icon-sm"></i>
									</button>
									<button type="button" class="btn btn-sm btn-danger" onclick="deleteAdmin({{ $admin->id }})" title="Hapus">
										<i data-feather="trash-2" class="icon-sm"></i>
									</button>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="adminModal" tabindex="-1" role="dialog" aria-labelledby="adminModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="adminModalLabel">Tambah Admin</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="adminForm" method="POST">
				@csrf
				<div id="methodField"></div>
				<div class="modal-body">
					<div class="form-group">
						<label for="name">Nama Lengkap <span class="text-danger">*</span></label>
						<input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama lengkap" required>
						<span class="text-danger" id="name_error"></span>
					</div>

					<div class="form-group">
						<label for="username">Username <span class="text-danger">*</span></label>
						<input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" required>
						<span class="text-danger" id="username_error"></span>
					</div>

					<div class="form-group">
						<label for="email">Email <span class="text-danger">*</span></label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" required>
						<span class="text-danger" id="email_error"></span>
					</div>

					<div class="form-group">
						<label for="password">Password <span class="text-danger" id="password_required">*</span></label>
						<input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password">
						<span class="text-danger" id="password_error"></span>
						<small class="form-text text-muted" id="password_help">Kosongkan jika tidak ingin mengubah password (untuk edit)</small>
					</div>

					<div class="form-group">
						<label for="password_confirmation">Konfirmasi Password <span class="text-danger" id="password_confirmation_required">*</span></label>
						<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Konfirmasi password">
						<span class="text-danger" id="password_confirmation_error"></span>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-primary">
						<i data-feather="save" class="mr-2 icon-sm"></i>Simpan
					</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection

@push('styles')
<!-- SweetAlert2 CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
@endpush

@push('scripts')
<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
// Setup CSRF token for all AJAX requests
$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
});

$(document).ready(function() {
	// Initialize DataTable
	$('#adminsTable').DataTable({
		"language": {
			"url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Indonesian.json"
		},
		"order": [[ 0, "asc" ]]
	});

	// Handle form submission
	$('#adminForm').on('submit', function(e) {
		e.preventDefault();
		
		let formData = new FormData(this);
		let url = $(this).attr('action');
		let methodInput = $('#methodField input[name="_method"]');
		let method = methodInput.length > 0 ? methodInput.val() : 'POST';
		
		// Ensure CSRF token is included - get from form or meta tag
		let csrfToken = $('input[name="_token"]', this).val() || $('meta[name="csrf-token"]').attr('content');
		if (!formData.has('_token')) {
			formData.append('_token', csrfToken);
		} else {
			formData.set('_token', csrfToken);
		}
		
		// Clear previous errors
		$('.text-danger').text('');
		
		$.ajax({
			url: url,
			type: method === 'PUT' ? 'POST' : method,
			data: formData,
			processData: false,
			contentType: false,
			beforeSend: function(xhr) {
				xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken);
			},
			success: function(response) {
				$('#adminModal').modal('hide');
				Swal.fire({
					icon: 'success',
					title: 'Berhasil!',
					text: response.message,
					timer: 2000,
					showConfirmButton: false
				}).then(() => {
					location.reload();
				});
			},
			error: function(xhr) {
				if (xhr.status === 422) {
					let errors = xhr.responseJSON.errors;
					$.each(errors, function(key, value) {
						$('#' + key + '_error').text(value[0]);
					});
				} else if (xhr.status === 419) {
					Swal.fire({
						icon: 'error',
						title: 'Session Expired!',
						text: 'Sesi Anda telah berakhir. Silakan refresh halaman dan coba lagi.',
						confirmButtonText: 'Refresh Halaman'
					}).then(() => {
						location.reload();
					});
				} else {
					Swal.fire({
						icon: 'error',
						title: 'Error!',
						text: xhr.responseJSON?.message || 'Terjadi kesalahan saat menyimpan data'
					});
				}
			}
		});
	});
});

function resetForm() {
	$('#adminForm')[0].reset();
	$('#adminForm').attr('action', '{{ route("dashboard.users.store") }}');
	$('#adminModalLabel').text('Tambah Admin');
	$('#methodField').html('');
	
	// Ensure CSRF token is always present
	$('input[name="_token"]', '#adminForm').val('{{ csrf_token() }}');
	
	$('.text-danger').text('');
	$('#password').attr('required', true);
	$('#password_confirmation').attr('required', true);
	$('#password_required').show();
	$('#password_confirmation_required').show();
	$('#password_help').hide();
}

function editAdmin(id) {
	resetForm();
	$('#adminModalLabel').text('Edit Admin');
	$('#password').removeAttr('required');
	$('#password_confirmation').removeAttr('required');
	$('#password_required').hide();
	$('#password_confirmation_required').hide();
	$('#password_help').show();
	
	$.ajax({
		url: '{{ url("dashboard/users") }}/' + id,
		type: 'GET',
		headers: {
			'X-CSRF-TOKEN': '{{ csrf_token() }}'
		},
		success: function(admin) {
			$('#name').val(admin.name);
			$('#username').val(admin.username);
			$('#email').val(admin.email);
			$('#adminForm').attr('action', '{{ url("dashboard/users") }}/' + id);
			$('#methodField').html('<input type="hidden" name="_method" value="PUT">');
			
			// Ensure CSRF token is always fresh
			$('input[name="_token"]', '#adminForm').val('{{ csrf_token() }}');
			
			$('#adminModal').modal('show');
		},
		error: function() {
			Swal.fire({
				icon: 'error',
				title: 'Error!',
				text: 'Gagal memuat data admin'
			});
		}
	});
}

function deleteAdmin(id) {
	Swal.fire({
		title: 'Apakah Anda yakin?',
		text: "Data yang dihapus tidak dapat dikembalikan!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#d33',
		cancelButtonColor: '#3085d6',
		confirmButtonText: 'Ya, Hapus!',
		cancelButtonText: 'Batal'
	}).then((result) => {
		if (result.isConfirmed) {
			$.ajax({
				url: '{{ url("dashboard/users") }}/' + id,
				type: 'DELETE',
				data: {
					_token: '{{ csrf_token() }}'
				},
				success: function(response) {
					Swal.fire({
						icon: 'success',
						title: 'Berhasil!',
						text: response.message,
						timer: 2000,
						showConfirmButton: false
					}).then(() => {
						location.reload();
					});
				},
				error: function(xhr) {
					Swal.fire({
						icon: 'error',
						title: 'Error!',
						text: xhr.responseJSON?.message || 'Gagal menghapus data admin'
					});
				}
			});
		}
	});
}
</script>
@endpush

