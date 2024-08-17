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

   {{-- @isset($errors)
       @foreach ($errors->all() as $e)
           <p>{{$e}}</p>
       @endforeach
   @endisset --}}
 @include('components.header')
 <div class="container">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <form method="post" action="{{route('store')}}">
              @csrf
                <h1 class="text-primary my-5" style="font-family:'Times New Roman', Times, serif">Enter Task Details</h1>

                <div class="form-group my-3">
                  <label >Title</label>
                  <input type="text" class="form-control @error('title')
                     is-invalid
                  @enderror" name="title" value="{{old('title')}}" >
                  <span class="text-danger">@error('title')
                      {{$message}}
                  @enderror</span>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control @error('description')
                        is-invalid
                    @enderror " id="exampleFormControlTextarea1" rows="3" name="description" value='{{old('description')}}'></textarea>
                    <span class="text-danger"> @error('description')
                        {{$message}}
                    @enderror </span>
                  </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Due Date</label>
                  <input type="date" class="form-control @error('date')
                      is-invalid
                  @enderror " id="exampleInputPassword1" placeholder="Password" name="date" value="{{old('date')}}">
                  <span class="text-danger">@error('date')
                      {{$message}}
                  @enderror</span>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Status</label>
                    <select class="form-control  @error('status')
                        is-invalid
                    @enderror" id="exampleFormControlSelect1" name="status">
                    <option value="">--Choose status--</option>
                      <option value="1">1</option>
                      <option value="0">0</option>

                    </select>
                    <span class="text-danger">@error('status')
                        {{$message}}

                    @enderror</span>
                  </div>
                <div class="form-group ">

                </div>
                <button type="submit" class="btn btn-primary" >Submit</button>
              </form>
        </div>
        <div class="col-4"></div>
    </div>
 </div>

</body>
</html>
