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
    @include('components.header')
    <div class="container">
        <div class="main-body">

              <!-- Breadcrumb -->

              <!-- /Breadcrumb -->
              <h1 class="text-primary my-5" style="font-family:'Times New Roman', Times, serif">Task Details</h1>

              <div class="row gutters-sm my-5 ">

                <div class="col-md-12">
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Task id</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                         {{$data->id}}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Task Title</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          {{$data->title}}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Task Description</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                         {{$data->description}}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Task Date</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          {{$data->date}}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Task Status</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          {{$data->status}}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-12">
                          <a class="btn btn-primary " target="__blank" href="{{route('list')}}">Back To List</a>
                        </div>
                      </div>
                    </div>
                  </div>




                </div>
              </div>

            </div>
        </div>

</body>
</html>
