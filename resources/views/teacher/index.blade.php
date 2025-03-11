<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>teacher index</title>
</head>
<body>
    <div class="container mt-3">
        <h2>Basic Table</h2>
        <p>The .table class adds basic styling (light padding and horizontal dividers) to a table:</p>   
        <p>
          <a href="{{route('teachers.create')}}">
  
            <button class="btn btn-success">add</button>  
          </a>
  
        </p>     
        <table class="table">
          <thead>
            <tr>
              <th>id</th>
              <th>name</th>
              <th>mobile</th>
              <th>opt</th>
            </tr>
          </thead>
          <tbody>
                          
            @foreach ($data as $val)
              <tr>
                  <td>{{$val->id}}</td>
                  <td>{{$val->name}} </td>
                  <td>{{$val->mobile}} </td> 
                  <td>
                    <form action="{{route('teachers.destroy',['teacher'=>$val->id])}}" method="post">
                      @csrf
                      @method('delete')
                      <a href="{{ route('teachers.edit', ['teacher' => $val->id]) }}"
                        class="btn btn-warning">edit</a>
  
                      <a href="{{route('teachers.edit',['teacher'=>$val->id])}}">
                        <button type="submit" class="btn btn-danger">del</button>  
                      </a>
                    </form>
                  </td>
              </tr>
  
              @endforeach
  
          </tbody>
        </table>
      </div>
</body>
</html>