@extends('master-layout')

@section('content')
    <div class="card" style="width: 100%; max-width: 400px;">
                
        <div class="card-header d-flex align-items-center justify-content-between">
            <h3>Create Product</h3>
            <button class="btn btn-sm btn-primary"><a href="{{ route('merchant.products') }}" class="nav-link">View All</a></button>
        </div>
        <div class="card-body">
            <form action="{{ route('product.insert') }}" method="post">
                @csrf
                <div class="form-group mb-2">
                    <input name="product_name" type="text" placeholder="Enter product name" class="form-control">
                </div>
                <button class="btn-primary btn-sm btn">Add</button>
            </form>
        </div>
    </div>
@endsection