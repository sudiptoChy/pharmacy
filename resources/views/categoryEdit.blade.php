@extends('main')

@section('title', "| category ")

@section('content')

<div class="page-header"><h1>Edit Category</h1></div>

	<form method="POST" action="{{ route('category.update', $ct->id) }}">
		  <div class="form-group col-md-3 col-md-offset-3">
		    <input type="text" class="form-control" name="category_name" value="{{ $ct->name }}">
		  </div>

		  <div class="form-group col-xs-2">
			  <select class="form-control" name="company_id">
				    @foreach($companies as $company)
					    <option name="company_id" value="{{ $company->id }}">{{ $company->name }}</option>
				    @endforeach
			   </select>
		   </div>

		  <div class="form-group">
		  	<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="submit" name="submit" value="update" class="btn btn-success">
		  </div>
	</form><br> <br> <br>
@endsection