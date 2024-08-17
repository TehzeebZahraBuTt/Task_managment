<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Laraval</title>
</head>
<body>
    {{-- <h1>Task managment Project</h1> --}}
    {{-- <h3>{{$title}}</h3> --}}
    {{-- @foreach ($names as $item)
    {{$item}}
        
    @endforeach --}}
    {{-- @forelse ($names as $item=>$val)
       <p>{{$item}}-{{$val}}</p>
    @empty
        <h3>No item found</h3>
    @endforelse --}}
    {{-- <form action="">
        <label for="">title:</label>
        <input type="text">
        <label for="">Description:</label>
        <input type="text">
        <label for="">Staus:</label>
        <select name="" id="">
            <option value="">Active</option>
            <option value="">Inactive</option>
        </select>
        <label for=""></label>
    </form>
     --}}
     <h1> User Detail</h1>
    <h1>{{$id['name']}}</h1> 
    <h1>{{$id['city']}}</h1> 
    <h1>{{$id['phone']}}</h1> 

</body>
</html>