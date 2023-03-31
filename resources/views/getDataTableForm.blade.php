<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Get Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <h1>Get Data from DataBase</h1>

    <div class ="navigators">
      <ul>
        <li><a href="{{ URL::to('form')}}">Form</a></li>
        <li><a href="{{ URL::to('getDataTableForm')}}">Data</a></li>
      </ul>
    </div>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">name </th>
            <th scope="col">Email</th>
            <th scope="col">Age</th>
            <th scope="col">Phone_Number</th>
            <th scope="col">Comment</th>
            <th scope="col">Created at</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $getUsers as $key => $urs )
            <tr>
            <th scope="row">{{$key +=1}}</th>
            <td>{{$urs->name}}</td>
            <td>{{$urs->email}}</td>
            <td>{{$urs->age}}</td>
            <td>{{$urs->phone_number}}</td>
            <td>{{$urs->comment}}</td>
            <td>{{$urs->created_at}}</td>
                      
            <td>
             
            <a href="{{route('formedit',$urs->id)}}"> <button type="button" class="btn btn-primary">Edit</button></a>
                <a href="{{route('form-delete',$urs->id)}}"><button type="button" class="btn btn-danger">Delete</button> </a>
            
            </td>
            </tr>
            @endforeach
        
        </tbody>
    </table>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>