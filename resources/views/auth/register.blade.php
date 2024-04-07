<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
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

                                    <form action="{{ route('User-registration') }}" method="post" id="loginpage" style="margin-top: -2rem; ">
                                      @csrf
                                        <div class="form-outline mb-4">
                                            <label for="Email">Email</label>
                                            <input type="email" id="form2Example11" class="form-control"
                                                name="Email" placeholder="Phone number or email address" />
                                            <span class="text-danger">
                                                @error('Email')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>

                                        <div class="form-outline mb-4">
                                          <label for="Phone">Phone</label>
                                          <input type="tel" id="form2Example11" class="form-control"
                                              name="Phone" placeholder="Phone number" />
                                          <span class="text-danger">
                                              @error('Phone')
                                                  {{ $message }}
                                              @enderror
                                          </span>
                                      </div>

                                      <div class="form-outline mb-4">
                                        <fieldset>Select your City
                                            <select name="City" id="form2Example11" class="form-control" required>
                                              <option value="select">select</option>
                                              <option value="Chennai">Chennai</option>
                                              <option value="Trichy">Trichy</option>
                                              <option value="Madurai">Madurai</option>
                                              <option value="Tirunelveli">Tirunelveli</option>
                                              <option value="Coimbatore">Coimbatore</option>
                                            </select>
                                        </fieldset>
                                        <span class="text-danger">
                                            @error('City')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                      </div>
                                    
                                      <div class="form-outline mb-4">
                                        <label for="gender">Gender&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male" />
                                          <label class="form-check-label" for="inlineRadio1">Male</label>
                                        </div>
                                      
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female" />
                                            <label class="form-check-label" for="inlineRadio2">Female</label>
                                        </div>
                                        <span style='display: block;' class="text-danger">
                                          @error('gender')
                                            {{ $message }}
                                           @enderror
                                        </span>
                                      </div>
                  
                                        <div class="form-outline mb-4">
                                            <label for="password">Password</label>
                                            <input type="password" id="form2Example22" class="form-control"
                                                name="password" placeholder="Password"/>
                                            <span class="text-danger">
                                                @error('password')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3 text-black " style="width: 24rem;">Register</button>
                                            <a class="text-muted" href="#!">Forgot password?</a>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4" >
                                            <p class="mb-0 me-2">You already have an account?</p>
                                            <a href="{{ route('auth-login') }}" class="btn btn-outline-danger">Log in</a>
                                        </div>

                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h1 class="mb-4">Looks like you're new here!</h1>
                                    <h5 class=" mb-0">Register your details to get started</h5>
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