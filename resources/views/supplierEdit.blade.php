@extends('main')

@section('title', "| Supp ")

@section('content')

<div class="page-header"><h1>Edit Supplier INFO</h1></div><br> <br>

		<form method="POST" action="{{ route('supplier.update', $spID )}}">
			<div class="form-group col-xs-2">
		    	<input type="text" class="form-control" name="first_name" value="{{ $sp->first_name }}">
		  	</div>
		  	<div class="form-group col-xs-2">
		    	<input type="text" class="form-control" name="last_name" value="{{ $sp->last_name }}">
		  	</div>
		  	<div class="form-group col-xs-3">
		    	<input type="text" class="form-control" name="email" value="{{ $sp->email }}">
		  	</div>
		  	<div class="form-group col-xs-2">
		    	<input type="text" class="form-control" name="mobile" value="{{ $sp->mobile }}">
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
				<input type="submit" name="submit" value="Update" class="btn btn-success">
			</div>
		</form> <br> <br> <br>
@endsection