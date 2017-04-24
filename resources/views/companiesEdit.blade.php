@extends('main')

@section('title', "| Company ")

@section('content')

<div class="page-header"><h1>Edit Company INFO</h1></div><br> <br>

	<form method="POST" action="{{ route('company.update', $cmp->id) }}">
		  <div class="form-group col-md-4 col-md-offset-4">
		    <input type="text" value = "{{ $cmp->name }}" class="form-control" name="companyName">
		  </div>
		  <div class="form-group">
		  	<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="submit" name="submit" value="Update" class="btn btn-success">
		  </div>
	</form><br> <br> <br>

@endsection