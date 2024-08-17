<div>
    <h1>show file</h1>
  @foreach ($data as $item)

  {{"id : "}}-- {{$item->id}}

  {{"name : "}}-- {{$item->name}}


  {{-- {{"file : "}}-- {{$item->file}} --}}
  <img src="{{asset('/storage/'.$item->file)}}" alt="" height="10%" width="10%">
  <form action="{{route('file.destroy',$item->id)}}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
    <a href="">Update</a>

  </form>

  <br>

  @endforeach


</div>
