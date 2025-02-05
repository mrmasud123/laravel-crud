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
        <div class="card-header text-center">
            <h3>Merchant Signup</h3>
        </div>
        <div class="card-body">
            <form action="">
                <div class="form-group mb-2">
                    <input type="text" name="name" placeholder="Enter your name" class="form-control">
                </div>
                <div class="form-group mb-2">
                    <input type="email" name="email" placeholder="Enter your email" class="form-control">
                </div>
                <div class="form-group mb-2">
                    <input type="text" name="shopname" placeholder="Enter your shop name" class="form-control">
                </div>
                <div class="form-group mb-2">
                    <input type="password" name="shoppassword" placeholder="Enter your shop password" class="form-control">
                </div>
                
                <button class="btn btn-primary btn-sm">Signup</button>
                <button class="btn btn-secondary btn-sm"><a class="nav-link" href="{{ route('merchant.login') }}">Login</a></button>
            </form>
        </div>
    </div>
</body>
</html>
