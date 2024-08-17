<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css"
     integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">


</head>
<body>
    <div class="container">
        <h1 class="text-primary">Welcome  {{Auth::user()->name}}</h1>
        <div class="row my-5">
            <div class="col-6">

                <a href="" class="btn btn-primary">Go to inner page</a>
                <a href="{{route('logout')}}" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </div>


</body>
</html>



