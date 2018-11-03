<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<div class="container">
    <div class="row">
  <h2>File Upload and store in database</h2>
    </div>
    <div class="row">
  <form action="{{ route('upload.file') }}" enctype="multipart/form-data" method="POST">
    @csrf
    <div class="form-group">
      {{-- <input type="file" class="form-control-file border" name="file"> --}}   {{-- For single file --}}
      <input type="file" class="form-control-file border" name="file[]" multiple>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
<div class="row">
<h2>Show Files</h2>
{{-- <img src="{{ asset('storage/upload/me.jpg') }}"/> --}}
<img src="http://localhost:8000/uploadedfile/me.jpg"/>
</div>
</div>

</body>
</html>
