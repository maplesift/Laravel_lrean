<!DOCTYPE html>
<html lang="en">
<head>
  <title>laravel learn</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    @php
    // dd($data);
    @endphp

    <div class="container mt-3">
      <h2>Basic Table</h2>
      <p>The .table class adds basic styling (light padding and horizontal dividers) to a table:</p>   
      <p>
        <a href="{{route('students.create')}}">

          <button class="btn btn-success">add</button>  
        </a>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
          Open modal
        </button>
      </p>
      <div class="container mt-3">

        
      </div>
      
      <!-- The Modal -->
      <div class="modal fade" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
      
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Modal Heading</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
      
            <!-- Modal body -->
            <div class="modal-body">
              <form action="{{route('students.store')}}" method="POST">
                @csrf
                <div class="mb-3 mt-3">
                  <label for="name">name:</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                </div>
                <div class="mb-3">
                  <label for="mobile">mobile:</label>
                  <input type="text" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile">
                </div>
            
                {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
              </div>
              
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                {{-- <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button> --}}
              </div>
            </form>
      
          </div>
        </div>
      </div>         
      <table class="table">
        <thead>
          <tr>
            <th>id</th>
            <th>name</th>
            <th>mobile</th>
            <th>phone</th>
            <th>opt</th>
          </tr>
        </thead>
        <tbody>
                        
          @foreach ($data as $val)
            <tr>
                <td>{{$val->id}}</td>
                <td>{{$val->name}} </td>
                <td>{{$val->mobile}} </td> 
                <td>{{$val->phone->phone ?? ''}} </td> 
                <td>
                  <form action="{{route('students.destroy',['student'=>$val->id])}}" method="post">
                    @csrf
                    @method('delete')
                    <a href="{{ route('students.edit', ['student' => $val->id]) }}"
                      class="btn btn-warning">edit</a>

                    <a href="{{route('students.edit',['student'=>$val->id])}}">
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
