@extends('main')

@section('title', "| New Sale ")

@section('content')

@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<div class="page-header"><h2 style="text-align: center; color: blue">Create a sell</h2></div>

    <form method="POST" action="#">
          <div class="form-group col-sm-4 col-md-offset-4">
            <label for="example-text-input">Choose Medicine</label>
            <select class="form-control" name="category_id">
                
                  <option name="category_id" value="">1</option>
                  <option name="category_id" value="">2</option>
                  <option name="category_id" value="">3</option>
                  <option name="category_id" value="">4</option>
                
             </select>
          </div>

          <div class="form-group col-sm-4 col-md-offset-4">
            <label for="example-text-input">Choose Quantity</label>
            <input type="text" class="form-control" name="quantity" placeholder="Quantity" required="true">
          </div>

          <div class="form-group col-md-2 col-md-offset-4">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" name="submit" value="Insert" class="btn btn-primary">
          </div>
      </form>

 </div>

@endsection