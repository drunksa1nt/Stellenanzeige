<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
    <title>Company</title>
<body>
    <center>
        <h1>Company</h1>
    <form action="store_data" method="POST">
        @csrf
        <div class="mb-3">
            <label for="InputCompanyName" class="form-label">Company</label>
            <input type="text" name="Name" class="form-control">
        </div>
        <div class="mb-3">
            <label for="Gruendungsjahr" class="form-label">Gruendungsjahr</label>
            <input type="text" name="Gruendungsjahr" class="form-control" >
        </div><br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>                                
</Center>
</body>
</html>