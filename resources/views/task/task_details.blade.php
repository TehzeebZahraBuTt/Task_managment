<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css"
     integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
     <script
     src="https://code.jquery.com/jquery-3.7.1.js"
     integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
     crossorigin="anonymous"></script>
   <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
   {{-- <script type="text/javascript" src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script> --}}



   <script type="text/javascript">

     $(document).ready(function(){
       $('#myTable').DataTable();
     });
   </script>
</head>
<body>
    @include('components.header')
    <div class="container my-5">
        @php
            $sr=1;
        @endphp


            <table id="myTable">
                <thead>
                    <th>Sr#no</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>status</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                    <td>{{$sr++}}</td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->date}}</td>
                    <td>@if ($item->status==1)
                        <label style="color: green">Active</label>
                    @else
                    <label style="color: red">Inactive</label>

                    @endif</td>
                    <td>
                        <a href="{{route('edit',$item->id)}}" class="btn btn-primary">Edit</a>
                        <a href="{{route('delete',$item->id)}}" class="btn btn-danger">Delete</a>
                        <a href="{{route('view',$item->id)}}" class="btn btn-success">View</a>
                    </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>

    </div>

    <script type="text/javascript" src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>


</body>
</html>



