<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="header">
       <div>
        <h3>Hello World!</h3>

       </div>
       <div id="links-container">
        <a href="{{route('home')}}">Home</a>
        <a href="{{route('contact')}}">Contact us</a>
        <a href="{{route('blog','id')}}">Blog</a>

       </div>
       <div id="button-container">
         <button>Submit</button>
       </div>
    </div>
    <div id="main-container">
        @hasSection ('content')
        @yield('content')
            
        @else
        <h1>Home page</h1>
            
        @endif
      

    </div>
    
</body>
</html>