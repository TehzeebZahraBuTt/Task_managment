{{-- @extends('masterTemp') --}}
{{-- 
@hasSection('content')

<h3>Blog page</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem ipsa veniam consectetur
     itaque alias, sequi fugit rerum cumque voluptates enim pariatur voluptate inventore, at aspernatur
     , quod illum dolor delectus quia amet facilis sunt eius tempore debitis laudantium. Nihil doloremque eos
     , perspiciatis aliquid repudiandae, ut est delectus harum non debitis error adipisci laborum et sint veritatis 
     expedita at voluptas ab quam iusto quae aliquam consequatur commodi. Sint illum eaque dolorum laudantium ipsam.
      Nostrum excepturi est dolores culpa in nisi repellendus unde, ab inventore nam labore velit dolorum eos, vero
       molestias a ullam? Officia cum accusantium itaque praesentium nemo adipisci mollitia porro.</p>
    
@else
<h1>No Content</h1>
    
@endif --}}


{{-- @section('content')


<h3>Blog page</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem ipsa veniam consectetur
     itaque alias, sequi fugit rerum cumque voluptates enim pariatur voluptate inventore, at aspernatur
     , quod illum dolor delectus quia amet facilis sunt eius tempore debitis laudantium. Nihil doloremque eos
     , perspiciatis aliquid repudiandae, ut est delectus harum non debitis error adipisci laborum et sint veritatis 
     expedita at voluptas ab quam iusto quae aliquam consequatur commodi. Sint illum eaque dolorum laudantium ipsam.
      Nostrum excepturi est dolores culpa in nisi repellendus unde, ab inventore nam labore velit dolorum eos, vero
       molestias a ullam? Officia cum accusantium itaque praesentium nemo adipisci mollitia porro.</p>
    
 
@endsection --}}
<form action="{{route('store')}}" method="POST" >
     @csrf
     <label for="">Name</label>
     <input type="text" name="username" value="{{$data->name}}">
     <br>
     <label for="">Email</label>
     <input type="email" name="email" value="{{$data->email}}">
     <br>
     <label for="">Password</label>
     <input type="pasword" name="password" value="{{$data->password}}">
     <br>
     <input type="submit" >

 </form>
