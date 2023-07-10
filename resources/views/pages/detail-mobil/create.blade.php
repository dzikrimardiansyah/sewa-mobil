@extends('layouts.app')
@section('content')
@section('title','Add Mobil')


<!-- Page Wrapper -->
<div class="page-wrapper">
	<div class="content container-fluid">
		
		<!-- Add Blog -->					
		<div class="row">
			<div class="col-md-6">
				<h5 class="mb-3">Add Mobil</h5>
				<div class="row">
					<form action="{{ route('backsite.detail-mobil.store') }}" method="POST" enctype="multipart/form-data">
					@csrf
                        
                    @error('merek_mobil')
					<div class="alert alert-danger mt-2">
						{{ $message }}
					</div>
					@enderror
						<div class="form-group form-focus">
							<input type="text" name="merek_mobil" id="merek_mobil" required autofocus class="form-control floating">
							<label class="focus-label">Merek Mobil <span class="text-danger">*</span></label>
						</div>
                    @error('model_mobil')
					<div class="alert alert-danger mt-2">
						{{ $message }}
					</div>
					@enderror
                        <div class="form-group form-focus">
							<input type="text" name="model_mobil" id="model_mobil" required autofocus class="form-control floating">
							<label class="focus-label">Model Mobil <span class="text-danger">*</span></label>
						</div>
                    @error('no_plat')
					<div class="alert alert-danger mt-2">
						{{ $message }}
					</div>
					@enderror
                        <div class="form-group form-focus">
							<input type="text" name="no_plat" id="no_plat" required autofocus class="form-control floating">
							<label class="focus-label">Nomor Plat <span class="text-danger">*</span></label>
						</div>
                     @error('price_mobil')
					<div class="alert alert-danger mt-2">
						{{ $message }}
					</div>
					@enderror
                        <div class="form-group form-focus">
							<input type="text" name="price_mobil" id="price_mobil" required autofocus class="form-control floating">
							<label class="focus-label">Price Mobil <span class="text-danger">*</span></label>
						</div>
                        @error('photo')
					<div class="alert alert-danger mt-2">
						{{ $message }}
					</div>
					@enderror
						<div class="change-photo-btn">
							<div><i class="feather-upload"></i>
							<p>Upload File</p></div>
							<input type="file" name="photo" id="photo" class="upload">
							<span class="file-upload-text"></span>
						</div>
						<p class="file-name text-success">Successfully Product image.jpg,Png uploaded <a href="#" class="text-danger"><i class="feather-x"></i></a></p>
						<button type="submit" class="btn btn-primary save-btn">Save Changes</button>
					</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Add Blog -->
	</div>
</div>
<!-- /Page Wrapper -->

</div>
<!-- /Main Wrapper -->
	
@endsection