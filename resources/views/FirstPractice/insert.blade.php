<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('store')}}" method="POST" >
        @csrf
        <label for="">Name</label>
        <input type="text" name="username">
        <br>
        <label for="">Email</label>
        <input type="email" name="email">
        <br>
        <label for="">Password</label>
        <input type="pasword" name="password">
        <br>
        <input type="submit" >

    </form>
</body>
</html>