<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
@if (count($errors)>0)
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }} </li>
@endforeach
</ul>
</div>
@endif
<div class="container">
    <div class="row">
  <div class="col-md-8"><h2>Laravel Multiple File Uploading</h2></div>

    </div>
    <br>
    <div class="row">
        <div class="col-md-3" ></div>
        <div class="col-md-6" >
            <form action="{{  route('upload')  }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="Person name"> Name:</label>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="Person surname"> Surname:</label>
                    <input type="text" name="surname" class="form-control" placeholder="Surname">
                </div> <div class="form-group">
                    <label for="Person mail"> Name:</label>
                    <input type="text" name="email" class="form-control" placeholder="Email">
                </div>
                <label for="Person photo">Photo:</label>
                <br />
                <input type="file" class="form-control" name="photos[]" multiple>
                <br /><br />
                <input type="submit" class="btn btn-primary" value="Upload">
            </form>
        </div>
    </div>
</div>
    
</body>
</html>