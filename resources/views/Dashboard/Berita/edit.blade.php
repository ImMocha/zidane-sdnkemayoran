@extends('Dashboard.layouts.main')

@section('content')
<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title">Edit Berita</h6>

				@if ($errors->any())
					<div class="alert alert-danger">
						<ul class="mb-0">
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif

				<form action="{{ route('dashboard.beritas.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')

					<div class="form-group">
						<label for="judul">Judul Berita <span class="text-danger">*</span></label>
						<input type="text" class="form-control @error('judul') is-invalid @enderror" 
							id="judul" name="judul" placeholder="Masukkan judul berita" 
							value="{{ old('judul', $berita->judul) }}" required>
						@error('judul')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

					<div class="form-group">
						<label for="gambar">Gambar Cover</label>
						@if($berita->gambar)
							<div class="mb-2">
								<img src="{{ Storage::url($berita->gambar) }}" alt="{{ $berita->judul }}" 
									style="max-width: 200px; height: auto; border-radius: 5px;">
							</div>
						@endif
						<input type="file" class="form-control-file @error('gambar') is-invalid @enderror" 
							id="gambar" name="gambar" accept="image/*">
						<small class="form-text text-muted">Format: JPEG, PNG, JPG, GIF (Max: 2MB). Kosongkan jika tidak ingin mengubah.</small>
						@error('gambar')
							<span class="invalid-feedback d-block" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

					<div class="form-group">
						<label for="penulis">Penulis</label>
						<input type="text" class="form-control @error('penulis') is-invalid @enderror" 
							id="penulis" name="penulis" placeholder="Masukkan nama penulis" 
							value="{{ old('penulis', $berita->penulis) }}">
						@error('penulis')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

					<div class="form-group">
						<label for="isi">Isi Berita <span class="text-danger">*</span></label>
						<textarea class="form-control @error('isi') is-invalid @enderror" 
							id="isi" name="isi" rows="10">{{ old('isi', $berita->isi) }}</textarea>
						@error('isi')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

					<div class="form-check form-check-flat form-check-primary my-5">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input" name="status" value="1" 
								{{ old('status', $berita->status) ? 'checked' : '' }}>
							Publikasikan Berita
					
						</label>
					</div>

					<div class="mt-3">
						<button type="submit" class="btn btn-primary mr-2">
							<i data-feather="save" class="mr-2"></i>Update Berita
						</button>
						<a href="{{ route('dashboard.beritas.index') }}" class="btn btn-light">
							<i data-feather="x" class="mr-2"></i>Batal
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection

@push('scripts')
<script>
var editorInstance;

tinymce.init({
	selector: '#isi',
	height: 500,
	plugins: [
		'advlist autolink lists link image charmap print preview anchor',
		'searchreplace visualblocks code fullscreen',
		'insertdatetime media table paste code help wordcount'
	],
	toolbar: 'undo redo | formatselect | bold italic backcolor | \
		alignleft aligncenter alignright alignjustify | \
		bullist numlist outdent indent | removeformat | help | image',
	image_advtab: true,
	file_picker_types: 'image',
	automatic_uploads: true,
	images_upload_url: '{{ route("dashboard.beritas.upload") }}',
	images_upload_handler: function (blobInfo, progress) {
		return new Promise(function (resolve, reject) {
			var xhr = new XMLHttpRequest();
			xhr.withCredentials = false;
			xhr.open('POST', '{{ route("dashboard.beritas.upload") }}');

			xhr.upload.onprogress = function (e) {
				progress(e.loaded / e.total * 100);
			};

			xhr.onload = function () {
				if (xhr.status === 403) {
					reject({ message: 'HTTP Error: ' + xhr.status, remove: true });
					return;
				}

				if (xhr.status < 200 || xhr.status >= 300) {
					reject('HTTP Error: ' + xhr.status);
					return;
				}

				var json = JSON.parse(xhr.responseText);

				if (!json || typeof json.location != 'string') {
					reject('Invalid JSON: ' + xhr.responseText);
					return;
				}

				resolve(json.location);
			};

			xhr.onerror = function () {
				reject('Image upload failed due to a XHR Transport error. Code: ' + xhr.status);
			};

			var formData = new FormData();
			formData.append('file', blobInfo.blob(), blobInfo.filename());
			formData.append('_token', '{{ csrf_token() }}');

			xhr.send(formData);
		});
	},
	setup: function(editor) {
		editorInstance = editor;
		editor.on('init', function() {
			// Set content after editor is initialized
		});
	}
});

// Handle form submission
$(document).ready(function() {
	$('form').on('submit', function(e) {
		// Sync TinyMCE content to textarea
		if (editorInstance) {
			editorInstance.save();
		}
		
		// Validate content
		var content = tinymce.get('isi').getContent();
		if (!content || content.trim() === '' || content === '<p></p>' || content === '<p><br></p>') {
			e.preventDefault();
			alert('Isi berita tidak boleh kosong!');
			tinymce.get('isi').focus();
			return false;
		}
	});
});
</script>
@endpush

