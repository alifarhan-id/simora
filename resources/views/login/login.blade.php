<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href={{asset("./public/login/style.css")}} />
    <title>SIMORA v2</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="{{route('login')}}" class="sign-in-form" method="POST">
            @csrf
            <img src={{asset("./public/login/img/logo.png")}}  alt="IMG" width="200" height="200" />
            <h2 class="title">SIMORA</h2>
            <h2 class="title1">(Sistem Monitoring Kasus Dan Anggaran)</h2>
            @if(session('errors'))
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            @endif
            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            @if (Session::has('error'))
                <div class="alert alert-danger">
                    {{ Session::get('error') }}
                </div>
            @endif
            
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="username"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" />
            </div>
            <button type="submit" value="Login" class="btn solid" />LOGIN </button>
          </form>
          <form action="#" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="username"  />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>
            <input type="submit" class="btn" value="Sign up" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            {{-- <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button> --}}
          </div>
          <img src={{asset("./public/login/img/login.svg")}} class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src={{asset("./public/login/img/register.svg")}} class="image" alt="" />
        </div>
      </div>
    </div>

    <script src={{asset("./public/login/app.js")}}></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  </body>
</html>