<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"/>
   <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<body>
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="{{ asset('images/logo.png') }}" style="width: 90px;" alt="logo">
                                        <h3 class="mt-1 mb-5 pb-1">HitCart</h3>
                                    </div>

                                    <form action="{{ route('login-validation') }}" method="post" id="loginpage">
                                      @csrf
                                      @method('post')
                                      @if(session('fail'))
                                       <div class="alert alert-danger alert-dismissible fade show">
                                        {{ session('fail') }}
                                        <button type="button" class="btn-close" id="close" aria-label="close" data-bs-dismiss="alert" ></button>
                                      </div>
                                      @endif
                                        <p>Please login to your account</p>

                                        <div class="form-outline mb-4">
                                            <input type="email" id="form2Example11" class="form-control"
                                                name="username" placeholder="Phone number or email address" />
                                            <span class="text-danger">
                                                @error('username')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="form2Example22" class="form-control"
                                                name="password" placeholder="Password"/>
                                            <span class="text-danger">
                                                @error('username')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" style="width: 24rem;">Log
                                                in</button>
                                            <a class="text-muted" href="#!">Forgot password?</a>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4" >
                                            <p class="mb-0 me-2">Don't have an account?</p>
                                            <a href="{{ route('auth-register') }}" class="btn btn-outline-danger">Create
                                                New</a>
                                        </div>

                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h1 class="mb-4">Login</h1>
                                    <h5 class=" mb-0">Get access to your Orders, Wishlist and Recommendations</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>

