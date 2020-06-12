<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/4/sandstone/bootstrap.min.css">
    <link rel="icon" type="image/png" href="/icon.png">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact App</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
        <div class="container">
        <a class="navbar-brand" href="{{ url('/')}}">
          <img src="/icon.png" width="30" height="30" class="d-inline-block align-top" alt="">
          <strong>Contact App</strong> 
        </a>
    </div>
      </nav>

    <div class="mt-5"></div>

    <div class="container">
    @yield('content')
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>