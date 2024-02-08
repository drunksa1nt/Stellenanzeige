<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>userliste</title>
</head>
<body>
        <center>
            <h1>Userliste</h1>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">User</th>
                  </tr>
                </thead>

                <tbody>

                @foreach($userliste as $userliste)    
                  <tr>
                    <th>{{$userliste->id}}</th>
                    <td>{{$userliste->name}}</td>
                  
                  <td> <a href="edit_userliste/{{$userliste->id}}"> <button class="btn btn-primary">EDIT</button> </a> </td>

                  <td> <a href="delete_userliste/{{$userliste->id}}"> <button class="btn btn-danger">DELETE</button> </a> </td>
                </tr>
                  @endforeach

                </tbody>
              </table>
        </center>

</body>
</html>