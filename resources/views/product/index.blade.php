@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('product') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
<th>Product Name</th>
<th>Product Category</th>
<th>Product Price</th>

</thead>
<tbody>
@foreach($product as $pro)
    <tr>
<td> {{$pro->name}}</td>
<td> {{$pro->category->name}}</td>
<td> {{$pro->price}}</td>


    </tr>
</tbody>
                  
                 
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
