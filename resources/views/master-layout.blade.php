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
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ route('merchant.dashboard') }}">Merchant Dashboard</a>
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('merchant.category') }}">Category</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('merchant.products') }}">Products</a>
                            </li>
                        </ul>
                        <button class="btn btn-warning btn-sm ms-3"><a href="{{ route('logout') }}" class="nav-link text-white">Logout</a></button>
                </div>
            </nav>
        </div>
        <div class="merchant-container w-100 d-flex align-items-center justify-content-center">
            @yield('content')
        </div>
    </div>

    



    {{-- <script>
        var box=document.getElementById('bx');
        if(box){
            setTimeout(() => {
                box.style.display = "none";
            }, 3000);
        }
        console.log(box);
    </script> --}}
    @yield('script')
</body>
</html>