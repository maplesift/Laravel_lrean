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

<div class="container mt-3">
  <h2>edit form</h2>
  @php
      
      // dd($data[0]);
  @endphp

  <form action="{{route('cars.update',['car'=>$data['id']])}}" method="POST">
    @csrf
    @method('put')
    <div class="mb-3 mt-3">
      <label for="name">name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{$data['name']}}">
    </div>
    <div class="mb-3">
      <label for="mobile">color:</label>
      <input type="text" class="form-control" id="color" placeholder="Enter color" name="color" value="{{$data['color']}}">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
