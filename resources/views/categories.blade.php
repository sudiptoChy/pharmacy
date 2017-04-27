@extends('main')

@section('title', "| category ")

@section('content')

<div class="page-header"><h1>Categories</h1></div><br> <br>

	<form method="POST" action="{{ route('category.create') }}">
		  <div class="form-group col-md-3 col-md-offset-3">
		    <input type="text" class="form-control" name="category_name" placeholder="Category Name">
		  </div>

		  <div class="form-group col-xs-2">
			  <select class="form-control" name="company_id" required="true">
			   <option disabled selected value> Select a Company </option>
				    @foreach($companies as $company)
					    <option name="company_id" value="{{ $company->id }}" >{{ $company->name }}</option>
				    @endforeach
			   </select>
		   </div>

		  <div class="form-group">
		  	<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="submit" name="submit" value="Insert" class="btn btn-primary">
		  </div>
	</form>
@if(count($categories))
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>Category name</th>
				<th>Company name</th>
				<th>Created at</th>
				<th>Updated at</th>
				<th>Actions</th>
			</tr>
		</thead>

		@foreach($categories as $category)
	  	<tr>
	  		<td>
	  			{{ $category->name }}
	  		</td>
	  		<td>
	  			{{ $category->company->name }}
	  		</td>
	  		<td>
	  			{{ date('M j, Y', strtotime($category->created_at)) }}
	  		</td>
	  		<td>
	  			{{ date('M j, Y', strtotime($category->updated_at)) }}
	  		</td>
	  		<td>
		  		<div>
					<form method="GET" action="{{ route('category.edit', $category->id )}}" style="display: inline-block;">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
					    <input type="submit" value="Update" role="button" class="btn btn-warning btn-sm">
					</form>
					<form method="POST" action="{{ route('category.delete', $category->id )}}" style="display: inline-block;">
					    <input type="hidden" name="_token" value="{{ csrf_token() }}">
					    <input type="submit" value="Delete" role="button" class="btn btn-danger btn-sm">
					</form>
		        </div>
	        </td>
	  	</tr>
	  	@endforeach
	</table>
@endif
@endsection