<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
    <div class>
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Email</th>
          </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>
            <th>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->age}}</td>
            <td>{{$user->email}}</td>
          </tr>
        @endforeach
        </tbody>
      </table>
      <nav>
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="user?page=1">1</a></li>
          <li class="page-item"><a class="page-link" href="user?page=2">2</a></li>
          <li class="page-item"><a class="page-link" href="user?page=3">3</a></li>
          <li class="page-item"><a class="page-link" href="user?page=4">4</a></li>
          <li class="page-item"><a class="page-link" href="user?page=5">5</a></li>
        </ul>
      </nav>
    <div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
