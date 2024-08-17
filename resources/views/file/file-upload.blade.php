<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File-Upload</title>
</head>
<body>

    <form action="{{route('file.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <h1>Upload File</h1>
        <label for="">Name</label>
        <input type="text" name="name" id="">
        <label for="">Upload Pic:</label>

        <input type="file" name="file" accept="images/*">
        <br> <br> <br>
        <button>Upload</button>

    </form>
    <div style="color:green">
        {{session('status')}}
    </div>



</body>
</html>
