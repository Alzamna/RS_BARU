<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="container-fluid d-flex" style="height: 100dvh; background: #ffff">
      <div style="width: 40%; margin-top:15%; margin-left:5%; justify-content:center;" >
        <img src="{{asset ('assets/vector.png')}}" alt="">
      </div>
      <div style="width: 60%; justify-content:center;" >
        <div class="card shadow" style="width: 80%; margin:auto; margin-top:15%;">
          <div class="container py-5" style="width: 90%; margin:auto;">
            <h1>Silahkan Login</h1>
            @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $item)
              <li>{{$item}}</li>
              @endforeach
            </ul>
          </div>
          @endif
            <form action="" method="POST">
              @csrf
                <div class="mb-3"> 
                    <label for="email" class="form-label">Email</label>
                    <input type="email" value="{{old('email')}}" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="mb-3 d-grid">
                    <button name="submit" type="submit" style="background: #5d86b4; border-radius: 5px; stroke: #5d86b4; color: #ffff; border: #5d86b4; height: 40px; margin-top: 10px;">Login</button>
                </div>
            </form>
        </div> 
          </div>
        </div>
      </div>
    
</body>
</html>
