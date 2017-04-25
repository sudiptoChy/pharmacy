@extends('main')

@section('title', "| Medicine ")

@section('content')

<div class="page-header"><h1>Edit Medicine</h1></div><br> <br>
	<table class="table table-hover">
		<tr>
			<form method="POST" action="{{ route('medicine.update', $medicineId) }}">
				<td class="col-xs-9">
		  			<div class="form-group col-xs-3">
		    			<input type="text" class="form-control" name="name" value="{{ $md->name }}" required="true">
		  			</div>
		  			<div class="form-group col-xs-2">
			  			<select class="form-control" name="category_id">
				    		@foreach($categories as $category)
					    		<option name="category_id" value="{{ $category->id }}">{{ $category->name }}</option>
				    		@endforeach
			   			</select>
		   			</div>
		   			<div class="form-group col-xs-3">
			  			<select class="form-control" name="supplier_id">
				    		@foreach($suppliers as $supplier)
					    		<option name="supplier_id" value="{{ $supplier->id }}"> {{ $supplier->first_name}}</option>
				    		@endforeach
			   			</select>
		   			</div>
		  			<div class="form-group col-xs-2">
		    			<input type="text" class="form-control" name="quantity" value="{{ $md->total_quantity }}">
		  			</div>
		  			<div class="form-group col-xs-2">
		    			<input type="text" class="form-control" name="base_price" value="{{ $md->base_price }}" >
		  			</div>
		  		</td>
		  		<td class="form-group col-xs-3">
		  			<div class="col-xs-6">
		  				<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="submit" name="submit" value="Update" class="btn btn-success btn-md col-xs-12">
		  			</div>
					<div class="col-xs-6">
						<a href="{{ route('medicine') }}" class="btn btn-danger btn-md col-xs-12" role="button">Cancel</a>
					</div>
				</td>
			</form>
		</tr>
	</table>


<br> <br> <br>
@endsection