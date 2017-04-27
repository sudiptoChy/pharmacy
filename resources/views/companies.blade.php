@extends('main')

@section('title', "| Company ")

@section('content')

<div class="page-header"><h1>Company Info</h1></div><br> <br>

	<form method="POST" action="{{ route('company.create') }}">
		  <div class="form-group col-md-4 col-md-offset-3">
		    <input type="text" class="form-control" name="companyName" placeholder="Company Name">
		  </div>
		  <div class="form-group">
		  	<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="submit" name="submit" value="Insert" class="btn btn-primary">
		  </div>
	</form>
@if(count($companies))
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>Name</th>
				<th>Created at</th>
				<th>Updated at</th>
				<th>Actions</th>
			</tr>
		</thead>

		@foreach($companies as $company)
	  	<tr class>
	  		<td class="col-xs-3">
	  			{{ $company->name }}
	  		</td>
	  		<td class="col-xs-2">
	  			{{ date('M j, Y', strtotime($company->created_at)) }}
	  		</td>
	  		<td class="col-xs-2">
	  			{{ date('M j, Y', strtotime($company->updated_at)) }}
	  		</td>
	  		<td class="col-xs-3">
		  		<div>
		            <form method="GET" action="{{ route('company.edit', $company->id) }}" style="display: inline-block;">
		              	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		                <input type="submit" value="Update" role="button" class="btn btn-warning btn-sm">
		            </form>
					<form method="POST" action="{{ route('company.delete', $company->id) }}" style="display: inline-block;">
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