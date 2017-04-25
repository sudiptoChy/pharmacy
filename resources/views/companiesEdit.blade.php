@extends('main')

@section('title', "| Company ")

@section('content')

<div class="page-header"><h1>Edit Company INFO</h1></div><br> <br>
	<table class="table table-hover">
		<tr>
			<form method="POST" action="{{ route('company.update', $cmp->id) }}">
			<td class="col-xs-9">
				<div class="form-group col-xs-12 ">
		    		<input type="text" value = "{{ $cmp->name }}" class="form-control" name="companyName">
				</div>
			</td>
			<td class="form-group col-xs-3">
		  		<div class="col-xs-6">
		  			<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="submit" name="submit" value="Update" class="btn btn-success btn-md col-xs-12">
		  		</div>
				<div class="col-xs-6">
					<a href="{{ route('companies') }}" class="btn btn-danger btn-md col-xs-12" role="button">Cancel</a>
				</div>
		  	</td>
			</form>
		</tr>
	</table>
	<br> <br>

@endsection