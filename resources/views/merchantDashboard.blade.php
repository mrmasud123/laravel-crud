@extends('master-layout')

@section('content')
<div class="card" style="width: 100%; max-width: 600px;">
    @if(session('success'))
        <div class="alert alert-success" id="bx">
            {{ session('success') }}
        </div>
    @endif
    <div class="card-header text-center">
        <h3>Store List</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Shop Name</th>
                    <th>Shop Location</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $dt)
                    <tr>
                        <td>{{ $dt->shop_name }}</td>
                        <td>{{ $dt->shop_location }}</td>
                        <td><button class="btn btn-sm btn-primary"><a href="{{ route('shop.details', $dt->id) }}" class="nav-link">Visit?</a></button></td>
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