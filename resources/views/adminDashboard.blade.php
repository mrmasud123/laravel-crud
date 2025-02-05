<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin || Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
    <div class="content">
        <div class="header text-end mt-2 w-100">
            <button class="btn btn-warning btn-sm"><a href="{{ route('logout') }}" class="nav-link">Logout</a></button>
        </div>
        <div class="merchant-container w-100 d-flex align-items-center justify-content-center">
            <div class="card" style="width: 100%; max-width: 400px;">
                @if(session('success'))
                    <div class="alert alert-success" id="bx">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="card-header text-center">
                    <h3>Merchant List</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Merchant Name</th>
                                <th>Merchant E-mail</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $dt)
                            <tr>
                                <td>{{ $dt->merchant_name }}</td>
                                <td>{{ $dt->email }}</td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    



    <script>
        var box=document.getElementById('bx');
        if(box){
            setTimeout(() => {
                box.style.display = "none";
            }, 3000);
        }
        console.log(box);
    </script>
</body>
</html>