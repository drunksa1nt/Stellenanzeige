<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
                                <center>
                                    <h1>Jobs EDIT</h1>
                                <form action="{{url('update_data', $data->id)}}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="InputJobName" class="form-label">Jobname</label>
                                        <input type="text" name="Name" value="{{$data->Name}}" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="jobbeschreibung" class="form-label">Job Beschreibung</label>
                                        <input type="text" name="Beschreibung" value="{{$data->Beschreibung}}" class="form-control" >
                                    </div><br>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                                
</Center>
    <title>Jobs</title>
</head>
<body>
    
</body>
</html>