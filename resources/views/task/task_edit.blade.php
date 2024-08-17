
{{-- @dd($data) --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css"
     integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

</head>
<body>

   @isset($errors)
       @foreach ($errors->all() as $e)
           <p>{{$e}}</p>
       @endforeach
   @endisset
 @include('components.header')
 <div class="container">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <form method="post" action="{{route('update',$data->id)}}">
              @csrf
                <h1 class="text-primary my-5" style="font-family:'Times New Roman', Times, serif">Enter Task Details</h1>

                <div class="form-group my-3">
                  <label >Title</label>
                  <input type="text" class="form-control" name="title" value="{{$data->title}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" >{{$data->description}}</textarea>
                  </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Due Date</label>
                  <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Password" name="date" value="{{$data->date}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Status</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="status">
                      @if ($data->status==1)
                          <option value="1" selected>Active</option>
                          <option value="0">inActive</option>
                      @else
                         <option value="1">Active</option>
                         <option value="0" selected>Inactive</option>

                      @endif

                    </select>
                  </div>
                <div class="form-group ">

                </div>
                <button type="submit" class="btn btn-primary" >Submit</button>
                <a type="submit" class="btn btn-success" href="{{route('list')}}">Cancel</a>
              </form>
        </div>
        <div class="col-4"></div>
    </div>
 </div>

</body>
</html>
