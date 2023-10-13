@extends('layouts.admin')

@section('content')

<div class="d-flex my-5">

	<form action="{{ route('admin.categories.store') }}" method="POST" style="min-width: 320px;" enctype="multipart/form-data">

		<h4>Nieuwe categorie</h4>

		<div class="form-group">
			<label for="name">Titel</label>
			<input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}">
		</div>


		<button type="submit" class="form-control btn btn-primary my-2">Opslaan</button>
		{{ csrf_field() }}
	</form>
</div>

@endsection
