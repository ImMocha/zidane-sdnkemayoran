@extends('Dashboard.layouts.main')

@section('content')
<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<div class="d-flex justify-content-between align-items-center mb-4">
					<h6 class="card-title mb-0">Pengelolaan Berita</h6>
					<a href="{{ route('dashboard.beritas.create') }}" class="btn btn-primary">
						<i data-feather="plus" class="mr-2"></i>Tambah Berita
					</a>
				</div>

				@if(session('success'))
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						{{ session('success') }}
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				@endif

				<div class="table-responsive">
					<table id="beritasTable" class="table table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>Gambar</th>
								<th>Judul</th>
								<th>Penulis</th>
								<th>Status</th>
								<th>Tanggal Dibuat</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							@foreach($beritas as $index => $berita)
							<tr>
								<td>{{ $index + 1 }}</td>
								<td>
									@if($berita->gambar)
										<img src="{{ Storage::url($berita->gambar) }}" alt="{{ $berita->judul }}" 
											style="width: 60px; height: 60px; object-fit: cover; border-radius: 5px;">
									@else
										<img src="/images/placeholder_berita.png" alt="{{ $berita->judul }}" 
											style="width: 60px; height: 60px; object-fit: cover; border-radius: 5px;">
									@endif
								</td>
								<td>{{ Str::limit($berita->judul, 50) }}</td>
								<td>{{ $berita->penulis }}</td>
								<td>
									@if($berita->status)
										<span class="badge badge-success">Published</span>
									@else
										<span class="badge badge-secondary">Draft</span>
									@endif
								</td>
								<td>{{ $berita->created_at->format('d/m/Y') }}</td>
								<td>
									<a href="{{ route('berita.show', $berita->slug) }}" 
										class="btn btn-sm btn-info" target="_blank" title="Lihat">
										<i data-feather="eye" class="icon-sm"></i>
									</a>
									<a href="{{ route('dashboard.beritas.edit', $berita->id) }}" 
										class="btn btn-sm btn-warning" title="Edit">
										<i data-feather="edit-2" class="icon-sm"></i>
									</a>
									<button type="button" class="btn btn-sm btn-danger" 
										onclick="deleteBerita({{ $berita->id }})" title="Hapus">
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

<form id="deleteForm" method="POST" style="display: none;">
	@csrf
	@method('DELETE')
</form>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
$(document).ready(function() {
	$('#beritasTable').DataTable({
		"language": {
			"url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Indonesian.json"
		},
		"order": [[ 0, "asc" ]]
	});
});

function deleteBerita(id) {
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
			let form = document.getElementById('deleteForm');
			form.action = '{{ url("dashboard/beritas") }}/' + id;
			form.submit();
		}
	});
}
</script>
@endpush

