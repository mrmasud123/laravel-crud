
@extends('master-layout')

@section('content')

<div class="card" style="width: 100%; max-width: 400px;">
    @if(session('success'))
        <div class="alert alert-success" id="bx">
            {{ session('success') }}
        </div>
    @endif
    <div class="card-header d-flex align-items-center justify-content-between">
        <h3>Product List</h3>
        <button class="btn btn-sm btn-primary"><a href="{{ route('product.create') }}" class="nav-link">Create?</a></button>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Product Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $dt)
                    <tr>
                        <td>{{ $dt->id }}</td>
                        <td>{{ $dt->product_name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('script')

<script>
    var box=document.getElementById('bx');
    if(box){
        setTimeout(() => {
            box.style.display = "none";
        }, 3000);
    }
    console.log(box);
</script>

@endsection
