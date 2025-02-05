<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body class="d-flex align-items-center justify-content-center" style="height: 100vh; margin: 0;">
    <div class="card" style="width: 100%; max-width: 400px;">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="card-header text-center">
            <h3>Merchant Login</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('merchant.log') }}" method="POST">
                @csrf
                <div class="form-group mb-2">
                    <input type="email" name="email" placeholder="Enter your email" class="form-control">
                </div>
                <div class="form-group mb-2">
                    <input type="password" name="shoppassword" placeholder="Enter your shop password" class="form-control">
                </div>
                <button class="btn btn-primary btn-sm">Login</button>
                <button class="btn btn-secondary btn-sm"><a class="nav-link" href="{{ route('merchant.signup') }}">Signup</a></button>
            </form>
            <div class="mt-3">
                <button class="btn btn-primary btn-sm">Admin</button>
                <button class="btn btn-warning btn-sm">Merchant</button>
            </div>
        </div>
    </div>
</body>
</html>
