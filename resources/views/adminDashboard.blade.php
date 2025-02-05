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
    @if (session('success'))
        <div class="alert alert-success" id="bx">
            {{ session('success') }}
        </div>
    @endif

    <h1>Admin Dashboard</h1>

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