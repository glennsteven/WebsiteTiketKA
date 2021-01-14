<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Signin Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.5/examples/sign-in/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">

    <form class="form-signin" method="POST" action="{{ route('register') }}">
      {{ csrf_field() }}
 
  <h1 class="h3 mb-3 font-weight-normal">Register</h1>

  <label for="inputName" class="sr-only">Name</label>
  <input type="name" name="name" id="inputName" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder= "Please insert your name" value="{{ old('name') }}" required autofocus>
  @if ($errors->has('name'))
   <div class="invalid-feedback">
    {{ $errors->first('name') }}
  </div>
  @endif

  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="email" name="email" id="inputEmail" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" placeholder="Email address" value="{{ old('email') }}" required>
   @if ($errors->has('email'))
   <div class="invalid-feedback">
    {{ $errors->first('email') }}
  </div>
  @endif

  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
   @if ($errors->has('password'))
   <div class="invalid-feedback">
    {{ $errors->first('password') }}
  </div>
  @endif

  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" name="password_confirmation" id="inputPassword" class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" placeholder="Password Confirmation" required>
  @if ($errors->has('password_confirmation'))
   <div class="invalid-feedback">
    {{ $errors->first('password_confirmation') }}
  </div>
  @endif

  <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
  <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
</form>
</body>

</html>
