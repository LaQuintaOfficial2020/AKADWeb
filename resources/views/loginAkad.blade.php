<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login Akad</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
         <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
         <link rel="stylesheet" type="text/css" href="css/global_login.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg fixed-top">
        <h3 class="akadLabel">AKAD</h3>
        </nav>
        <section class="container-fluid">
            <section class="row justify-content-center">
                <section class="col-12 col-sm-6 col-md-3">
                @if(Session::has('flash_message'))
                    <div class="alert alert-success">{{Session::get('flash_message')}}</div>
                @endif

                @if(Session::has('flash_error'))
                    <div class="alert alert-danger">{{Session::get('flash_error')}}</div>
                @endif
                    {{ Form::open(array('url' => 'auth/login','method'=>'post','class' => 'form-container')) }}
                <!-- <form class="form-container"> -->
                        <h4 class="text-center signInLabel">Sign In</h4>    
                        <div class="form-group emailGroup">
                          <label for="inputEmail1">Email</label>
                          <input type="email" id='email' name='email' class="form-control" id="inputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group passwordGroup">
                          <label for="inputPassword1">Password</label>
                          <input type="password" class="form-control" id="password" name='password'>
                        </div>
                        </div>
                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-default btn-sm">Let's Get Started</button>
                        </div>
                        <div class="col-sm-12 text-center">
                            <a href="{{url('signup')}}">Signup</a>
                         </div>
                    {{ Form::close() }}
                </section>
            </section>
        </section>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>
