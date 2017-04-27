@extends('main')

@section('title', "| category ")

@section('content')

<div class="page-header"><h1>Edit Category</h1></div><br> <br>
	<table class="table table-hover">
		<tr>
			<form method="POST" action="{{ route('category.update', $ct->id) }}">
				<td class="col-xs-9">
		  			<div class="form-group col-xs-7">
		    		<input type="text" class="form-control" name="category_name" value="{{ $ct->name }}">
		  			</div>
		  			<div class="form-group col-xs-5">
			  			<select class="form-control" name="company_id">
			  			<option disabled selected value> {{ $comp_name->name }} </option>
				    		@foreach($companies as $company)
					    		<option name="company_id" value="{{ $company->id }}">{{ $company->name }}</option>
				    		@endforeach
			   			</select>
		   			</div>
        		</td>
        		<td class="form-group col-xs-3">
		  			<div class="col-xs-6">
		  				<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="submit" name="submit" value="Update" class="btn btn-success btn-md col-xs-12">
		  			</div>
					<div class="col-xs-6">
						<a href="{{ route('categories') }}" class="btn btn-danger btn-md col-xs-12" role="button">Cancel</a>
					</div>
				</td>
			</form>
		</tr>
	</table>
	<br> <br> <br>
@endsection