<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <style>
        .alert {
            transition: opacity 1s ease;
        }
        .alert.fade-out {
            opacity: 0;
        }
    </style>
</head>
<body>
    @if (session('success'))
    <div class="alert alert-success" id="flash-message">
        {{ session('success') }}
    </div>
    @endif

    <h1>Merchant Dashboard</h1>

    <script>
        var flashMessage = document.getElementById('flash-message');
        if (flashMessage) {
            setTimeout(function() {
                flashMessage.classList.add('fade-out'); 
                flashMessage.style.display='none';
            }, 3000); 
        }
    </script>
</body>
</html>
