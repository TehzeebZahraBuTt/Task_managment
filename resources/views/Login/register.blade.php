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
            <form method="post" action="{{route('registerRequest')}}">
              @csrf
                <h1 class="text-primary my-5" style="font-family:'Times New Roman', Times, serif">Enter Registration Details</h1>

                <div class="form-group my-0">
                  <label >Name</label>
                  <input type="text" class="form-control @error('name')
                     is-invalid
                  @enderror" name="name" value="{{old('name')}}" >
                  <span class="text-danger">@error('name')
                      {{$message}}
                  @enderror</span>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Email</label>
                    <input class="form-control @error('email')
                        is-invalid
                    @enderror " id="exampleFormControlTextarea1" rows="3" name="email" value='{{old('email')}}'>
                    <span class="text-danger"> @error('email')
                        {{$message}}
                    @enderror </span>
                  </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control @error('password')
                      is-invalid
                  @enderror " id="exampleInputPassword1" placeholder="Password" name="password" value="{{old('password')}}">
                  <span class="text-danger">@error('password')
                      {{$message}}
                  @enderror</span>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password" class="form-control @error('confirm_password')
                        is-invalid
                    @enderror " id="exampleInputPassword1" placeholder="Password" name="password_confirmation" value="{{old('confirm_password')}}">
                    <span class="text-danger">@error('password_confirmation')
                        {{$message}}
                    @enderror</span>
                  </div>
                <div class="form-group ">

                </div>
                <button type="submit" class="btn btn-primary" >Register </button>
              </form>
        </div>
        <div class="col-4"></div>
    </div>
 </div>

</body>
</html>
