@extends('main')

@section('title', "| new sale dashboard")

@section('content')

<div class="col-md-6 col-md-offset-4">
    
    <h2 style="color:red" > Total Amount: {{ $data['totalMoney'] }}</h2>
    <h2 style="color:red"> Total Medicines: {{ $data['totalMedicines'] }}</h2>
    <h2 style="color:red"> Total Medicine Types: {{ $data['medicineTypes'] }}</h2>
    
</div>



@endsection