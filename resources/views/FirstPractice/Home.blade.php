@php
    $names=['one'=>"Apple",'two'=>"banana",'three'=>"orange"];
@endphp
{{-- @include('first',['title'=>'yahoo baba']) --}}
{{-- @include('first',['names'=>$names]) --}}

{{-- if we include a file that not exist in actual then there will be an error (@include('third')) To avoid this error use includeif--}}
{{-- @includeIf('third')

<h1>Home Page</h1>
{{"Hello world"}}
{!! "<h1>Hello word</h1>"!!}
@php 
$name="Ali";
$names=["ali","ahmad","aslam"];

@endphp
{{$name}}

<ul>
@foreach($names as $n)


 @if ($loop->first)
 <li style="color:red">{{$n}}</li>
     
 @else
 <li style="color:green">{{$n}}</li>
     
 @endif
    



@endforeach
</ul> --}}
{{-- 
<h1>View All Users:</h1>
@foreach ($users as $key=>$value)
   {{$key}}-{{$value['name']}}-{{$value['city']}}-{{$value['phone']}}
    <a href="{{route('view.user',$key)}}">Show detais</a>
    <br>
@endforeach --}}
<h1>Home page</h1>
@if (isset($data))


@foreach ($data as $item)
  <br> {{"Username"}} {{$item->name}} - {{"Email"}} {{$item->email}}
  <a href="{{route('blog',$item->id)}}">Click here</a>
@endforeach
    
@endif