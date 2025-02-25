<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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
      <table class="table">
        <thead>
          <tr>
            <th>id</th>
            <th>name</th>
            {{-- <th>Email</th> --}}
          </tr>
        </thead>
        <tbody>
                        
            @foreach ($data as $val)

            <tr>
                <td>{{$val['id']}}</td>
                <td>{{$val['name']}} </td>
                {{-- <td></td> --}}
            </tr>

            @endforeach

        </tbody>
      </table>
    </div>

</body>
</html>
