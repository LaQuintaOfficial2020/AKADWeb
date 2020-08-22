<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>Laravel</title>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

            <link rel="stylesheet" href="/css/styles.css">
            <link rel="stylesheet" href="/css/sign-up.css">

        </head>
          <body class="sb-nav-fixed">
            <header>
                <nav class="navbar navbar-light bg-light">
                    <a class="navbar-brand" href="/dashboard">
                        <h4>AKAD</h4>
                    </a>
                    <a class="navbar-brand" href="{{ url('auth/logout') }}">
                        <h3>Logout</h3>
                    </a>
                </nav> 
            </header>
            {{-- change user view here --}}
            {{-- student === 1 : teacher === 0 --}}
            @php
                $user =  1;
            @endphp
            <div class="main-row row">
                <nav class="col-2 bg-dark side-nav">
                    <div class="sidebar-sticky" style="color: #FFF; ">
                        <div class="sidenav-header p-3 mt-3">
                        @if(session()->has('userInfo'))
                            <h5 class="user-name">{{Session::get('userInfo')[0]->fname}} {{Session::get('userInfo')[0]->lname}}</h5>
                        @endif
                            <p class="classid">2014-199999</p>
                            <p class="classsec mt-2">{{Session::get('className')}}</p>
                        </div>
                        <ul class="nav flex-column">
                            <li class="nav-item active">
                                <a href="#" class="nav-link">Classworks</a>
                            </li>
                            <li>
                                <ul>
                                    <li class="nav nav-item">
                                        <a href="{{ url('profile') }}" class="nav-link">Profile</a>
                                    </li>
                                    <li class="nav nav-item">
                                        <a href="{{ url('activities') }}" class="nav-link">Activities</a>
                                    </li>
                                    <!-- <li class="nav nav-item">
                                        <a href="{{-- url('topics') --}}" class="nav-link">Topics</a>
                                    </li> -->
                                </ul>
                            </li>
                            <!-- <li class="nav-item">
                                <a href="#" class="nav-link">Calendar of Activities</a>
                            </li> -->
                            <li class="nav-item">
                                <a href="/AvatarCreation" class="nav-link">Manage Avatar</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Account</a>
                            </li>
                        </ul>
                    </div>
                </nav>   
                <main class="col-10">
                    <div class="container-fluid">    
                        <div class="row no-gutters">
                            @yield('main_content')
                            @yield('avatar')
                            {{-- <main role="main" style="border:1px solid brown;" class="{{($user === 1) ? 'col-7' : 'col-12'}}">
                                
                            </main>
                            @if ($user===1)
                            <section class="col-5">
                                <div class="row justify-content-center" style="border:1px solid red;">
                                    <div class="col-9">
                                        <img stylesrc="/img/avatar.jpg">
                                    </div>
                            </section>
                            @endif --}}
                        </div>  
                    </div>
                </main>
            </div>
            
            {{-- @yield('header')
            @yield('mainbody') --}}
                
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

            <script type="text/javascript" src="/js/jquery.slimscroll.min.js"></script>
            <script type="text/javascript" src="/js/script.js"></script>
            <script type="text/javascript" src="/js/dashboard-js.js"></script>

</body>
</html>