<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
   
<form action="{{url('/')}}/register"method="post">
    @csrf
    <div class="row">
        <div class="col"></div>
        <div class="col">
  <div class="mb-3">
    <label for="Username" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" autocomplete="off">
    <span class="text-danger">
        @error('name')
           {{$message}}
        @enderror
    </span>
  </div>
  <div class="mb-3">
    <label for="Email" class="form-label">Email Address</label>
    <input type="email" class="form-control" id="email" name="email" autocomplete="off">
    @error('email')
           {{$message}}
    @enderror
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" autocomplete="off">
    @error('password')
           {{$message}}
    @enderror
  </div>
  <div class="mb-3">
    <label for="confirm_password" class="form-label">Password</label>
    <input type="password" class="form-control" id="confirm_password" name="confirm_password" autocomplete="off">
    @error('confirm_password')
           {{$message}}
    @enderror
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>

</div>
   <div class="col"></div>
</div>

</form>
</body>
</html>